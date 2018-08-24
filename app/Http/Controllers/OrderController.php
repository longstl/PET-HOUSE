<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Order::paginate(10);
        return view('dashboard.order.list')->with('list_obj', $list_obj);
    }

    public function changeStatus(){
        $id = Input::get('id');
        $status = Input::get('status');
        $order = Order::find($id);
        if($order==null){
            return view('error.404');
        }
        $order->status = $status;
        $order->save();
        return redirect('/dashboard/order');
    }
}
