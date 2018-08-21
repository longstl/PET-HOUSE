@extends('dashboard.layout.masteradminlayout', [
    'page_title' => 'Create new Product | PET HOUSE Admin Page',
    'current_menu' => 'product_manager',
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
                    <h4 class="card-title">Create New Product</h4>
                    @if ($errors->any())
                        <div class="alert alert-rose">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/dashboard/product" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Title</label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty{{$errors->has('title')?' has-error':''}}">
                                        <label class="control-label"></label>
                                        <input type="text" name="title" class="form-control{{$errors->has('title')?' error':''}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Description</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty{{$errors->has('description')?' has-error':''}}">
                                        <label class="control-label"></label>
                                        <input type="text" name="description" class="form-control{{$errors->has('description')?' error':''}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Price</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty{{$errors->has('price')?' has-error':''}}">
                                        <label class="control-label"></label>
                                        <input type="text" name="price" class="form-control{{$errors->has('price')?' error':''}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Images</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty{{$errors->has('images')?' has-error':''}}">
                                        <label class="control-label"></label>
                                        <input type="text" name="images" class="form-control{{$errors->has('images')?' error':''}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">CategoryId</label>
                                <div class="col-sm-1">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <select name="categoryId" class="form-control">
                                            <option value="1">Dogs</option>
                                            <option value="2">Cats</option>
                                            <option value="3">Accessories</option>
                                            <option value="4">Food Pet</option>
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
@endsection