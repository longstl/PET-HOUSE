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
}
