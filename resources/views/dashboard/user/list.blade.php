@extends('dashboard.layout.masteradminlayout', [
   'page_title'=>'List User | PET HOUSE Admin Page',
    'current_menu'=>'user_manager',
    'current_sub_menu'=>'list_item'
])
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">List User</h4>
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
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
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 50px;" aria-sort="ascending"
                                                aria-label="ID: activate to sort column descending">ID
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 157px;" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width:700px;"
                                                aria-label="Image: activate to sort column ascending">Email
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 150px;"
                                                aria-label="Image: activate to sort column ascending">Kind
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list_obj as $item)
                                            <tr role="row" class="odd">
                                                <td>{{$item->id}}</td>
                                                <td tabindex="0" class="sorting_1">{{$item->name}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->admin?"Admin":"Member"}}</td>
                                                <td class="text-right">
                                                    <a href="/dashboard/user/{{$item->id}}/edit" class="btn btn-simple btn-warning btn-icon edit"><i
                                                                class="material-icons">edit</i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                            @else
                                <div class="alert alert-info">There are currently no product categories. Please click<a
                                            href="/dashboard/user/create" title="Thêm mới sản phẩm" class="btn-link">come in</a> to create a new.
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