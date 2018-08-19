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
        $list_obj = Product::where('status', 1)->orderBy('created_at', 'DESC')->paginate($limit);
        return view('dashboard.category.list')->with('list_obj', $list_obj);
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
        $request->validate([
            'categoryId'=> 'required',
            'title' => 'required|max:50|min:10',
            'description' => 'required',
            'price' => 'required|numeric',
            'images' => 'required'
        ], [
            'title.required' => 'Please enter title product.',
            'title.min' => 'title too short, please enter at least 10 characters.',
            'title.max' => 'title too long, maximum 50 characters.',
            'title.unique' => 'title have been exist, try another name.',
            'price.required' => 'Please enter title product.',
            'price.errorCharacter' => 'Please enter only numberic.',
            'description.required' => 'Please enter description product',
            'images.required' => 'Please enter image url',
        ]);
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
        $validate_unique = '';
        if($obj->title != $request->get('title')){
            $validate_unique = '|unique:categories';
        }
        $request->validate([
            'title' => 'required|max:50|min:10' . $validate_unique,
            'description' => 'required',
            'price' => 'required|numberic',
            'images' => 'required'
        ], [
            'title.required' => 'Please enter title product.',
            'title.min' => 'title too short, please enter at least 10 characters.',
            'title.max' => 'title too long, maximum 50 characters.',
            'title.unique' => 'title have been exist, try another name.',
            'price.required' => 'Please enter title product.',
            'price.errorCharacter' => 'Please enter only numberic.',
            'description.required' => 'Please enter description product',
            'images.required' => 'Please enter image url',
        ]);
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
