@extends('dashboard.layout.masteradminlayout', [
     'page_title' => 'Edit User | PET HOUSE Admin Page',
    'current_menu' => 'user_manager',
    'current_sub_menu' => 'edit',
])
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">edit</i>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-content">
                    <h4 class="card-title">User Edit</h4>
                    <form method="post" action="/dashboard/user/{{$obj->id}}" class="form-horizontal">
                        @method('PUT')
                        {{csrf_field()}}
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Name</label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" name="name" class="form-control" value="{{$obj->name}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Email</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" name="email" class="form-control" value="{{$obj->email}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Old Password</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="password" name="password" class="form-control" value="{{$obj->password}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">New Password</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="password" name="new_password" class="form-control" >
                                        <span class="material-input"></span></div>
                                </div>
                            </div> <div class="row">
                                <label class="col-sm-2 label-on-left">Retype password</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="password" name="comfirm_new_password" class="form-control" >
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Current Kind</label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" name="admin" class="form-control" value="{{($obj->admin==1?"Admin":"Member")}}" disabled>
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Kind</label>
                                <div class="col-sm-1">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <select name="admin" class="form-control">
                                            <option value="1">admin</option>
                                            <option value="0">member</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" value="Submit" class="btn btn-fill btn-success">Save
                                        <div class="ripple-container"></div>
                                    </button>
                                    <button type="reset" value="Reset" class="btn btn-fill btn-rose">Reset
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'product-edit-ckeditor' );
    </script>
@endsection