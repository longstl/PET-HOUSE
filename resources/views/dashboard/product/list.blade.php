@extends('dashboard.layout.masteradminlayout', [
   'page_title'=>'List Product | PET HOUSE Admin Page',
    'current_menu'=>'product_manager',
    'current_sub_menu'=>'list_item'
])
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">List Product</h4>
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                    <button id="btn-del-checked">Delete Checked</button>
                </div>
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
                                                colspan="1" style="width: 50px;"
                                                aria-label="ID: activate to sort column descending"><input type="checkbox" id="check-all" name="feature" value="scales">All
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 50px;" aria-sort="ascending"
                                                aria-label="ID: activate to sort column descending">ID
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 157px;" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 150px;"
                                                aria-label="Image: activate to sort column ascending">Description
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 90px;"
                                                aria-label="Price: activate to sort column ascending">Price
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 156px;"
                                                aria-label="Price: activate to sort column ascending">Images
                                            </th>
                                            <th class="disabled-sorting text-right sorting" tabindex="0"
                                                aria-controls="datatables" rowspan="1" colspan="1" style="width: 109px;"
                                                aria-label="Actions: activate to sort column ascending">Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list_obj as $item)
                                            <tr role="row" class="odd">
                                                <td><input type="checkbox" class="item-checkbox" name="feature" value="{{$item->id}}"></td>
                                                <td>{{$item->id}}</td>
                                                <td tabindex="0" class="sorting_1">{{$item->title}}</td>
                                                <td>{{$item->description}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>
                                                    <div class="card"
                                                         style="width: 100px;height: 80px;background-image: url('{{$item->images}}'); background-size: cover">
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <a href="/dashboard/product/{{$item->id}}/edit" class="btn btn-simple btn-warning btn-icon edit"><i
                                                                class="material-icons">edit</i></a>
                                                    <a href="{{$item->id}}" class="btn btn-simple btn-danger btn-icon remove btn-delete-product"><i
                                                                class="material-icons">close</i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                            @else
                                <div class="alert alert-info">Hiện tại không có danh mục sản phẩm. Vui lòng click <a
                                            href="/dashboard/product/create" title="Thêm mới sản phẩm" class="btn-link">vào đây</a> để tạo mới.
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

            document.getElementById('btn-del-checked').onclick = function () {
                var idsToDelete = [];
                var itemCheckboxes = document.getElementsByClassName('item-checkbox')
                for(var i = 0; i< itemCheckboxes.length; i++){
                    if(itemCheckboxes[i].checked){
                        idsToDelete.push(itemCheckboxes[i].value);
                    }
                }
                var req = new XMLHttpRequest();
                req.open('GET', '/api/product?' + 'ids=' + idsToDelete);
                req.setRequestHeader('X-CSRF-TOKEN', document.getElementsByTagName("meta")["_token"].getAttribute("content"));
                req.onloadend = function () {
                    if(this.status === 200){
                        console.log(JSON.parse(this.responseText));
                    }
                }
                req.send();
            }
        })();
    </script>
@endsection