<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductsallController extends Controller
{
    public function getListDog()
    {
        $product = Product::where('categoryId', 1)->where('status',1)->paginate(12);
        return view('pethouse.dog')->with('product', $product);
    }

    public function getListCat(){
        $product = Product::where('categoryId', 2)->Where('status',1)->paginate(12);
        return view('pethouse.cat')->with('product', $product);
    }

    public function getListAccessoriDog(){
        $product = Product::where('categoryId', 3)->Where('status',1)->paginate(12);
        return view('access.shopaccessories.accessoriesdog')->with('product', $product);
    }
    public function getListFoodDog(){
        $product = Product::where('categoryId', 4)->Where('status',1)->paginate(12);
        return view('food-for-pet.food')->with('product', $product);
    }

    public function getListHome(){
        $product = Product::where('categoryId', 1)->Where('status',1)->orderBy('created_at', 'desc')->paginate(4);
        $product2 = Product::where('categoryId', 2)->Where('status',1)->orderBy('created_at', 'desc')->paginate(4);
        $product3 = Product::where('categoryId', 3)->Where('status',1)->orderBy('created_at', 'desc')->paginate(4);
        $product4 = Product::where('categoryId', 4)->Where('status',1)->orderBy('created_at', 'desc')->paginate(4);
        return view('shop.index')->with('product', $product)->with('product2', $product2)->with('product3', $product3)->with('product4', $product4);
    }
}
