<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 10;
        $list_obj = Category::where('status', 1)->orderBy('created_at', 'DESC')->paginate($limit);
        return view('dashboard.category.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Category();
        $request->validate([
            'title' => 'required|max:50|min:10',
            'description' => 'required',
            'images' => 'required'
        ], [
            'title.required' => 'Please enter title category.',
            'title.min' => 'title too short, please enter at least 10 characters.',
            'title.max' => 'title too long, maximum 50 characters.',
            'title.unique' => 'title have been exist, try another name.',
            'description.required' => 'Please enter description category',
            'images.required' => 'Please enter image url',
        ]);
        $obj->title = $request->get('title');
        $obj->description = $request->get('description');
        $obj->images = $request->get('images');
        $obj->save();
        return redirect('/dashboard/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return view('/404');
        }
        return view('dashboard.category.edit')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Category::find($id);
        $validate_unique = '';
        if($obj->title != $request->get('title')){
            $validate_unique = '|unique:categories';
        }
        $request->validate([
            'title' => 'required|max:50|min:10' . $validate_unique,
            'description' => 'required',
            'images' => 'required'
        ], [
            'title.required' => 'Please enter title category.',
            'title.min' => 'title too short, please enter at least 10 characters.',
            'title.max' => 'title too long, maximum 50 characters.',
            'title.unique' => 'title have been exist, try another name.',
            'description.required' => 'Please enter description category',
            'images.required' => 'Please enter image url',
        ]);
        if ($obj == null) {
            return view('404');
        }
        $obj->title = $request->get('title');
        $obj->description = $request->get('description');
        $obj->images = $request->get('images');
        $obj->status = $request->get('status');
        $obj->save();
        return redirect('/dashboard/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Category does not exist or Deleted!'], 404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Deleted'], 200);
    }

}
