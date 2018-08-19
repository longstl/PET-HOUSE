<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 10;
        $list_obj = Article::where('status', 1)->orderBy('created_at', 'DESC')->paginate($limit);
        return view('dashboard.article.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.article.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Article();
        $obj->title = $request->get('title');
        $obj->content = $request->get('content');
        $obj->images = $request->get('images');
        $obj->save();
        return redirect('/dashboard/article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Article::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('dashboard.article.list')
            ->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Article::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('dashboard.article.edit')
            ->with('obj', $obj);
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
        $obj = Article::find($id);
        $validate_unique = '';
        if($obj->name != $request->get('name')){
            $validate_unique = '|unique:categories';
        }
        $request->validate([
            'title' => 'required|max:50|min:10' . $validate_unique,
            'content' => 'required',
            'images' => 'required'
        ], [
            'title.required' => 'Please enter title article.',
            'title.min' => 'title too short, please enter at least 10 characters.',
            'title.max' => 'title too long, maximum 50 characters.',
            'title.unique' => 'title have been exist, try another name.',
            'content.required' => 'Please enter conent article',
            'images.required' => 'Please enter image url',
        ]);
        if ($obj == null) {
            return view('404');
        }
        $obj->title = Input::get('title');
        $obj->content = Input::get('content');
        $obj->images = Input::get('images');
        $obj->save();
        return redirect('/dashboard/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Article::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Article does not exist or Deleted!'], 404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
