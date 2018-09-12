<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Product;
use Illuminate\Support\Facades\Input;
class ProductsallController extends Controller
{
    public function getListDog(Request $request) {
        $query = Product::orderBy('created_at','desc');
        $query = $query->where('categoryId', 1)->Where('status', 1);
        if($request->min_price && $request->max_price){
            // This will only executed if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('price','>=',$request->min_price);
            $query = $query->where('price','<=',$request->max_price);
        }
        $product = $query->paginate(12);
        return view('pethouse.dog')->with('product', $product);
    }

    public function getListCat(Request $request) {
        $query = Product::orderBy('created_at','desc');
        $query = $query->where('categoryId', 2)->Where('status', 1);
        if($request->min_price && $request->max_price){
            // This will only executed if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('price','>=',$request->min_price);
            $query = $query->where('price','<=',$request->max_price);
        }
        $product = $query->paginate(12);
        return view('pethouse.cat')->with('product', $product);
    }
    public function getListAccessoriDog(Request $request) {
        $query = Product::orderBy('created_at','desc');
        $query = $query->where('categoryId', 3)->Where('status', 1);
        if($request->min_price && $request->max_price){
            // This will only executed if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('price','>=',$request->min_price);
            $query = $query->where('price','<=',$request->max_price);
        }
        $product = $query->paginate(12);
        return view('access.shopaccessories.accessoriesdog')->with('product', $product);
    }

    public function getListFood(Request $request) {
        $query = Product::orderBy('created_at','desc');
        $query = $query->where('categoryId', 4)->Where('status', 1);
        if($request->min_price && $request->max_price){
            // This will only executed if you received any price
            // Make you you validated the min and max price properly
            $query = $query->where('price','>=',$request->min_price);
            $query = $query->where('price','<=',$request->max_price);
        }
        $product = $query->paginate(12);
        return view('food-for-pet.food')->with('product', $product);
    }

    public function detaildog($id)
    {
        $product_detail = Product::find($id);
        return view('detail.detail-dog')->with('product_detail', $product_detail);
    }

    public function detailcat($id)
    {
        $product_detail = Product::find($id);
        return view('detail.detail-cat')->with('product_detail', $product_detail);
    }

    public function detailaccess($id)
    {
        $product_detail = Product::find($id);
        return view('detail.detail-accessories')->with('product_detail', $product_detail);
    }

    public function detailfood($id)
    {
        $product_detail = Product::find($id);
        return view('detail.detail-food')->with('product_detail', $product_detail);
    }

    public function getListHome()
    {
        $product = Product::where('categoryId', 1)->Where('status', 1)->orderBy('created_at', 'desc')->paginate(4);
        $product2 = Product::where('categoryId', 2)->Where('status', 1)->orderBy('created_at', 'desc')->paginate(4);
        $product3 = Product::where('categoryId', 3)->Where('status', 1)->orderBy('created_at', 'desc')->paginate(4);
        $product4 = Product::where('categoryId', 4)->Where('status', 1)->orderBy('created_at', 'desc')->paginate(4);
        return view('shop.index')->with('product', $product)->with('product2', $product2)->with('product3', $product3)->with('product4', $product4);
    }

    public function getSearch(Request $req)
    {
        $product = Product::where('title', 'like', '%' . $req->key . '%')
            ->orWhere('price', $req->key)
            ->paginate(16);
            return view('partials.search')->with('product', $product);

    }

    public function getSearchPricecat()
    {
        $min_price = (int)Input::get('min');
        $max_price = (int)Input::get('max');
        $product = Product::where('categoryId', 2)
            ->whereBetween('price',[ intval($min_price), intval($max_price) ])
            ->get();
        return View('pethouse.cat')-> with('product',$product);

    }

    public function getSearchPricedog()
    {
        $min_price = Input::get('price');
        $max_price = Input::get('price');
        $dog = Category::find(1);
        $product = Product::where('category', $dog)
            ->where('title','like','%'.search_query.'%')
            ->whereBetween('price',[ $min_price, $max_price])
            ->get();
        return View('pethouse.dog')->with('product',$product);
    }

    public function getSearchPriceAccessories()
    {
        $min_price = Input::get('price');
        $max_price = Input::get('price');
        $accessories = Category::find(3);
        $product = Product::where('category', $accessories)
            ->where('title','like','%'.search_query.'%')
            ->whereBetween('price',[ $min_price, $max_price])
            ->get();
        return View('access.shopaccessories.accessoriesdog')-> with('product', $product);
    }

    public function getSearchPricefood()
    {
        $min_price = Input::get('price');
        $max_price = Input::get('price');
        $food = Category::find(4);
        $product = Product::where('category', $food)
            ->where('title','like','%'.search_query.'%')
            ->whereBetween('price',[ $min_price, $max_price])
            ->get();
        return View('food-for-pet.food')-> with('product', $product);
    }

}
