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
        $request->validate([
            'categoryId'=> 'required',
            'title' => 'required|max:50|min:10',
            'father' => 'required|max:50|min:3',
            'mother' => 'required|max:50|min:3',
            'paper' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'images' => 'required'
        ], [
            'title.required' => 'Please enter title product.',
            'title.min' => 'title too short, please enter at least 10 characters.',
            'title.max' => 'title too long, maximum 50 characters.',
            'title.unique' => 'title have been exist, try another name.',

            'father.min' => 'title too short, please enter at least 3 characters.',
            'father.max' => 'title too long, maximum 50 characters.',
            'father.unique' => 'title have been exist, try another name.',

            'mother.min' => 'title too short, please enter at least 3 characters.',
            'mother.max' => 'title too long, maximum 50 characters.',
            'mother.unique' => 'title have been exist, try another name.',

            'paper.required' => 'Please enter image url or commit',

            'price.required' => 'Please enter Price product.',
            'price.errorCharacter' => 'Please enter only numberic.',
            'description.required' => 'Please enter description product',
            'images.required' => 'Please enter image url',
        ]);
        $obj->title = $request->get('title');
        $obj->description = $request->get('description');
        $obj->price = $request->get('price');
        $obj->father = $request->get('father');
        $obj->mother = $request->get('mother');
        $obj->paper = $request->get('paper');
        $obj->images = $request->get('images');
        $obj->categoryId = $request->get('categoryId');
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
            $validate_unique = '|unique:products';
        }
        $request->validate([
            'title' => 'required|max:50|min:10' . $validate_unique,
            'father' => 'required|max:50|min:3',
            'mother' => 'required|max:50|min:3',
            'paper' => 'required',
            'description' => 'required',
            'price' => 'required|numberic|min:0',
            'images' => 'required'
        ], [
            'title.required' => 'Please enter title product.',
            'title.min' => 'title too short, please enter at least 10 characters.',
            'title.max' => 'title too long, maximum 50 characters.',
            'title.unique' => 'title have been exist, try another name.',

            'father.min' => 'title too short, please enter at least 3 characters.',
            'father.max' => 'title too long, maximum 50 characters.',
            'father.unique' => 'title have been exist, try another name.',

            'mother.min' => 'title too short, please enter at least 3 characters.',
            'mother.max' => 'title too long, maximum 50 characters.',
            'mother.unique' => 'title have been exist, try another name.',

            'paper.required' => 'Please enter image url or commit',

            'price.required' => 'Please enter Price product.',
            'price.errorCharacter' => 'Please enter only numberic and only integer',
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
        $obj->father = $request->get('father');
        $obj->mother = $request->get('mother');
        $obj->paper = $request->get('paper');
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
