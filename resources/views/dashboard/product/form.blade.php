@extends('dashboard.layout.masteradminlayout')
@section('title')
    Dashboard Admin Pet House | Add Product
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">add</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Create New Product</h4>
                    <form method="post" action="/dashboard/product" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Name</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" name="title" class="form-control">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Description</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <textarea type="text" name="description" class="form-control"></textarea>
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Price</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="number" name="price" class="form-control">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Images</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" name="images" class="form-control">
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