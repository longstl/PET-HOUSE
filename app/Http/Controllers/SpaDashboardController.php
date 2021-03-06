<?php

namespace App\Http\Controllers;

use App\BookSpa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SpaDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list_obj = BookSpa::orderBy('created_at', 'DESC')->paginate(10);
        return view('dashboard.spa.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $obj = BookSpa::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Order does not exist or Deleted!'], 404);
        }
        $obj->status = -1;
        $obj->save();
        return response()->json(['message' => 'Deleted'], 200);
    }

    public function changeStatus()
    {
        $id = Input::get('id');
        $status = Input::get('status');
        $order = BookSpa::find($id);
        if ($order == null) {
            return view('error.404');
        }
        $order->status = $status;
        $order->save();
        return redirect('/dashboard/spa');
    }
}
