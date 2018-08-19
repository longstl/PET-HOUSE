<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 10;
        $list_obj = Product::paginate($limit);
        return view('dashboard.product.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj =new Product();
        $obj->categoryId = $request->get('categoryId');
        $obj->title = $request->get('title');
        $obj->description = $request->get('description');
        $obj->price = $request->get('price');
        $obj->images = $request->get('images');
        $obj->save();
        return redirect('/dashboard/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return view('/404');
        }
        return view('dashboard.product.edit')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->title = $request->get('title');
        $obj->description = $request->get('description');
        $obj->price = $request->get('price');
        $obj->images = $request->get('images');
        $obj->categoryId = $request->get('categoryId');
        $obj->status = $request->get('status');
        $obj->save();
        return redirect('/dashboard/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Product does not exist or Deleted!'], 404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Product Delete'], 200);
    }
}
