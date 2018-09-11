<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Category;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\ShoppingCart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    //
    public function demoTransaction()
    {
        $cate1 = new Category();
        $cate2 = new Category();
        $cate1->name = 'Cate1';
        $cate1->description = 'Description';
        $cate1->images = 'Hi';
        $cate2->title = 'Cate2';
        $cate2->description = 'Description';
        $cate2->images = 'Hi2';
        DB::beginTransaction();
        try {
            $cate1->save();
            $cate2->save();
            DB::rollBack();
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->back();
        }
    }
    public function addToCart()
    {
        $id = Input::get('id');
        $quantity = Input::get('quantity');
        if ($id == null || $quantity == null) {
            return view('error.404');// làm trang lỗi 400, bad request.
        }
        $product = Product::find($id);
        if ($product == null || $product->status != 1) {
            return view('error.404');
        }
        // validate quantity.
        $shopping_cart = new ShoppingCart();
        if (Session::has('cart')) {
            $shopping_cart = Session::get('cart');
            if (array_key_exists($id, $shopping_cart->items)) {
                $quantity += $shopping_cart->items[$id]->quantity;
            }
        }
        $item = new CartItem();
        $item->product = $product;
        $item->quantity = $quantity;
        $shopping_cart->items[$id] = $item;
        Session::put('cart', $shopping_cart);
        return redirect('/cart-view');
    }
    public function removeFromCart()
    {

    }
    public function showCart()
    {
        $shopping_cart = new ShoppingCart();
        if (Session::has('cart')) {
            $shopping_cart = Session::get('cart');
        }
        return view('shop.shopping-cart')->with('shopping_cart', $shopping_cart);
    }
    public function updateCart()
    {
        $shopping_cart = new ShoppingCart();

        $products = Input::get('products');

        if (is_array($products)) {
            foreach (array_keys($products) as $key) {
                $product = Product::find($key);
                if ($product == null || $product->status != 1) {
                    return view('error.404');
                }
                $item = new CartItem();
                $item->product = $product;
                $item->quantity = $products[$key];
                $shopping_cart->items[$key] = $item;
            }
        }
        Session::put('cart', $shopping_cart);
        return redirect('/cart-view');
    }
    public function destroyCart()
    {
        Session::remove('cart');
        return redirect('/')->with('message', 'Cart is empty.');
    }
    public function checkoutCart()
    {
        if(auth()->check()){
            if (Session::has('cart')) {
                try {
                    DB::beginTransaction();
                    $shopping_cart = Session::get('cart');
                    $ship_name = Input::get('shipName');
                    $ship_address = Input::get('shipAddress');
                    $ship_phone = Input::get('shipPhone');
                    $order = new Order();
                    $order->userId = auth()->user()->id;
                    $order->shipName = $ship_name;
                    $order->shipAddress = $ship_address;
                    $order->shipPhone = $ship_phone;
                    $order->total_price = 0;
                    $order->save();
                    $order_id = $order->id;
                    $order_details = array();
                    foreach ($shopping_cart->items as $item) {
                        $product = Product::find($item->product->id);
                        if ($product == null || $product->status != 1) {
                            return view('error.404');
                        }
                        $quantity = $item->quantity;
                        if($quantity <= 0){
                            // tra ve loi
                        }else{
                            $order_detail = new OrderDetail();
                            $order_detail->orderId = $order_id;
                            $order_detail->productId = $product->id;
                            $order_detail->quantity = $quantity;
                            $order_detail->unit_price = $product->price;
                            $order->total_price += $order_detail->unit_price * $order_detail->quantity;
                            $order_detail->created_at = Carbon::now();
                            $order_detail->updated_at = Carbon::now();
                            $order_detail->save();
                            array_push($order_details, $order_detail);
                        }
                    }
                    $order->save();
                    DB::commit();
                    // clear session cart.
                    Session::remove('cart');
                    // send mail or sms.

                    return view('shop.animation');
                } catch (\Exception $exception) {
                    DB::rollBack();
                    return 'Error.' . $exception->getMessage();
                }

            } else {
                return redirect('/')->with('message', 'Cart is empty.');
            }
        }else{
            return redirect('/login');
        }

    }
}
