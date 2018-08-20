@extends('dashboard.layout.masteradminlayout', [
     'page_title' => 'Sửa thông tin danh mục sản phẩm | Seafashion Admin Page',
    'current_menu' => 'article_manager',
    'current_sub_menu' => 'edit',
])
@section('title')
    Dashboard Admin Pet House | Edit article
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">edit</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">EDIT ARTICLE</h4>
                    <form method="post" action="/dashboard/article/{{$obj->id}}" class="form-horizontal">
                        @method('PUT')
                        {{csrf_field()}}
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Title</label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" name="title" class="form-control" value="{{$obj->title}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Content</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <textarea type="text" name="content" class="form-control">{{$obj->content}}</textarea>
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Image</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" name="images" class="form-control" value="{{$obj->images}}">
                                        <span class="material-input"></span></div>
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