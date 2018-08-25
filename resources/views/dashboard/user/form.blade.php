@extends('dashboard.layout.masteradminlayout', [
    'page_title' => 'Create new User | PET HOUSE Admin Page',
    'current_menu' => 'User_manager',
    'current_sub_menu' => 'create_new',
])
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">add</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Create New User</h4>
                    @if ($errors->any())
                        <div class="alert alert-rose">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/dashboard/user" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Name</label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty{{$errors->has('name')?' has-error':''}}">
                                        <label class="control-label"></label>
                                        <input type="text" name="name" class="form-control{{$errors->has('name')?' error':''}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Email</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty{{$errors->has('email')?' has-error':''}}">
                                        <label class="control-label"></label>
                                        <input type="text" name="email" class="form-control{{$errors->has('email')?' error':''}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">PassWord</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty{{$errors->has('password')?' has-error':''}}">
                                        <label class="control-label"></label>
                                        <input type="password" name="password" class="form-control{{$errors->has('password')?' error':''}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">PassWord</label>
                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
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
        CKEDITOR.replace( 'product-form-ckeditor' );
    </script>
@endsection