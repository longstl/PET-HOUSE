@extends('dashboard.layout.masteradminlayout', [
   'page_title'=>'List Contact | PET HOUSE Admin Page',
    'current_menu'=>'contact_manager',
    'current_sub_menu'=>'list_item'
])
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">LIST CONTACT</h4>
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
                                            <th class="col-1"><input type="checkbox" id="check-all" name="feature" value="scales">All</th>
                                            <th class="col-1">ID</th>
                                            <th class="col-2">Date Contact</th>
                                            <th class="col-2">Full Name</th>
                                            <th class="col-2">Email</th>
                                            <th class="col-2">Phone</th>
                                            <th class="col-2">Message</th>
                                            <th class="col-1">Status</th>
                                            <th class="col-2">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list_obj as $item)
                                            <tr role="row" class="odd">
                                                <td class="col-1"><input type="checkbox" class="item-checkbox" name="feature" value="{{$item->id}}"></td>
                                                <td class="col-1">{{$item->id}}</td>
                                                <td class="col-2">{{$item->created_at}}</td>
                                                <td class="col-2">{{$item->firstName}} {{$item->lastName}}</td>
                                                <td class="col-2">{{$item->email}}</td>
                                                <td class="col-2">{{$item->phone}}</td>
                                                <td class="col-2">{{$item->message}}</td>
                                                <td class="col-1">{{$item->statusLabel}}</td>
                                                <td class="col-3">
                                                    @if($item->status==0)
                                                        <a href="/dashboard/contact/change-status?id={{$item->id}}&status=1" onclick="return confirm('Do you want to accept booking contact?')"
                                                           class="btn btn-simple btn-success btn-icon edit"><i
                                                                    class="material-icons">edit</i></a>
                                                    @elseif($item->status==1)
                                                        <a href="/dashboard/contact/change-status?id={{$item->id}}&status=2" onclick="return confirm('Do you want to complete booking contact?')"
                                                           class="btn btn-simple btn-success btn-icon edit"><i
                                                                    class="material-icons">done</i></a>
                                                    @endif
                                                    @if($item->status==0)
                                                        <a href="{{$item->id}}" class="btn btn-simple btn-danger btn-icon remove btn-delete-contact"><i
                                                                    class="material-icons">close</i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                            @else
                                <div class="alert alert-info">List Contact is Empty.
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
    <script>
        document.getElementById('check-all').onchange = function () {
            var checkboxes = document.getElementsByClassName('item-checkbox');
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = this.checked;
            }
        };

        (function () {
            var checkboxes = document.getElementsByClassName('item-checkbox');
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].onchange = function () {
                    if (!this.checked) {
                        document.getElementById('check-all').checked = false;
                    }
                }
            }
        })();
    </script>
@endsection