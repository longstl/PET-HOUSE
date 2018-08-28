<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
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

    public function findById($id)
    {
        $list_obj = Order::where('userId',$id)->paginate(10);
        return view('shop.history-order')->with('list_obj', $list_obj);
    }

    public function getChartDataApi(Request $request)
    {
//        $start_date = $request->start_date;
//        $end_date = $request->end_date;
        $start_date = '2018-08-10';
        $end_date = Carbon::now();
        $chart_data = Order::select(DB::raw('sum(total_price) as revenue'), DB::raw('date(created_at) as day'))
            ->whereBetween('created_at', array($start_date, $end_date))
            ->groupBy('day')
            ->orderBy('day', 'desc')
            ->get();
        return $chart_data;
    }

    public function changeStatus()
    {
        $id = Input::get('id');
        $status = Input::get('status');
        $order = Order::find($id);
        if ($order == null) {
            return view('error.404');
        }
        $order->status = $status;
        $order->save();
        return redirect('/dashboard/order');
    }

    public function destroy($id)
    {
        $obj = Order::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Order does not exist or Deleted!'], 404);
        }
        $obj->status = -1;
        $obj->save();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
