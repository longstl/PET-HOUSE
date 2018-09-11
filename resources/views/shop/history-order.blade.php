@extends('layouts.master')
@section('title')
    Order History
@endsection
@section('content')
    <div class="material-datatables">
        <div id="datatables_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row" style="width: 100%">
                <div class="col-md-12 col-12 col-sm-12">
                    @if($list_obj->count()>0)
                        <table id="datatables"
                               class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                               cellspacing="0" width="100%" style="width: 100%;" role="grid"
                               aria-describedby="datatables_info">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Order Name</th>
                                <th>Receiver Name</th>
                                <th>Order Time</th>
                                <th>Information</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_obj as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->user->name}}</td>
                                    <td>{!! $item->shipInformation !!}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <ul>
                                            @foreach($item->details as $order_detail)
                                                <li>{{$order_detail->product->title}} - {{$order_detail->quantity}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{$item->statusLabel}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
                @else
                    <div class="alert alert-info">We do not have a purchase history. Please <a href="/pethousedog">click
                            here</a> to continue shopping.
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-5 col-sm-12">

            </div>
            <div class="col-md-7 col-7 col-sm-12">
                {{ $list_obj->links() }}
            </div>
        </div>
    </div>
@endsection