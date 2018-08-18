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
        $list_obj = Article::all();
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
        $obj->description = $request->get('description');
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
    public function update($id)
    {
        $obj = Article::find($id);
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
            return view('404');
        }
        $obj->delete();
        return redirect('/dashboard/article/list');
    }

    public function delete($id){
        $obj = Article::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('dashboard.article.confirm_delete')->with('obj', $obj);
    }
}
