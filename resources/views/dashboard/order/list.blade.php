@extends('dashboard.layout.masteradminlayout', [
   'page_title'=>'List User | PET HOUSE Admin Page',
    'current_menu'=>'order_manager',
    'current_sub_menu'=>'list_item'
])
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">LIST ORDER</h4>
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                @if (Session::has('message'))
                    <div class="alert {{ Session::get('message-class') }}">{{ Session::get('message') }}</div>
                @endif
                <div id="linechart_material"></div>
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
                                            <th class="col-2">Receiver Name</th>
                                            <th class="col-2">Order Time</th>
                                            <th class="col-2">Information</th>
                                            <th class="col-1">Status</th>
                                            <th class="col-3">Action</th>
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
                                                <td class="col-3">
                                                    @if($item->status==0)
                                                        <a href="/dashboard/order/change-status?id={{$item->id}}&status=1" onclick="return confirm('Do you want to accept order?')"
                                                           class="btn btn-simple btn-success btn-icon edit"><i
                                                                    class="material-icons">edit</i></a>
                                                    @elseif($item->status==1)
                                                        <a href="/dashboard/order/change-status?id={{$item->id}}&status=2" onclick="return confirm('Do you want to complete order?')"
                                                           class="btn btn-simple btn-success btn-icon edit"><i
                                                                    class="material-icons">done</i></a>
                                                    @endif
                                                    @if($item->status==0)
                                                        <a href="{{$item->id}}" class="btn btn-simple btn-danger btn-icon remove btn-delete-cart"><i
                                                                    class="material-icons">close</i></a>
                                                    @endif
                                                </td>
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