@extends('layouts.master')
@section('title')
    Order History
    @endsection
@section('content')
    <div class="material-datatables">
        <div id="datatables_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-12">
                    @if($list_obj->count()>0)
                        <table id="datatables"
                               class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                               cellspacing="0" width="100%" style="width: 100%;" role="grid"
                               aria-describedby="datatables_info">
                            <thead>
                            <tr role="row">
                                <th class="col-1">ID</th>
                                <th class="col-1">Order Name</th>
                                <th class="col-3">Receiver Name</th>
                                <th class="col-3">Order Time</th>
                                <th class="col-3">Information</th>
                                <th class="col-1">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_obj as $item)
                                <tr role="row" class="odd">
                                    <td class="col-1">{{$item->id}}</td>
                                    <td class="col-1">{{$item->user->name}}</td>
                                    <td class="col-2">{!! $item->shipInformation !!}</td>
                                    <td class="col-2">{{$item->created_at}}</td>
                                    <td class="col-2">
                                        <ul>
                                            @foreach($item->details as $order_detail)
                                                <li>{{$order_detail->product->title}} - {{$order_detail->quantity}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="col-1">{{$item->statusLabel}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
                @else
                    <div class="alert alert-info">List Order is Empty.
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-sm-5">
                </div>
                <div class="col-sm-7">
                    {{ $list_obj->links() }}
                </div>
            </div>
        </div>
    </div>


    </div>
    <!-- end content-->
    </div>
    <!--  end card  -->
    </div>
    @endsection