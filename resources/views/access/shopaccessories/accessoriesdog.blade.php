@extends('layouts.master')
@section('title')
@endsection
@section('styles')
    <link rel="stylesheet" href="/css/accessories-product.css" type="text/css">
@endsection
@section('scripts')
    <script src="/js/modal-product.js" type="text/javascript"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
@endsection
@section('slide-show')
    @include('partials.slideshow')
@endsection
@section('content')

    <link rel="stylesheet" href="/css/accessories-product.css" type="text/css">    <br>
    <form class="woocommerce-ordering" method="get">
        <select name="orderby" class="orderby">
            <option value="menu_order" selected="selected">Necklace</option>
            <option value="popularity">Sort by popularity</option>
            <option value="rating">Sort by average rating</option>
            <option value="date">Sort by newness</option>
            <option value="price">Sort by price: low to high</option>
            <option value="price-desc">Sort by price: high to low</option>
        </select>
        <input type="hidden" name="paged" value="1">
    </form>
    <div class="bread-bar bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/accessories">Accessories</a></li>
                        <li class="active">Necklace</li>
                    </ol>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                </div>
            </div>
        </div>
    </div>
    <div class="nm-divider separator_align_center">
        <h1 class="nm-divider-title medium">Accessories</h1>
        <br>
        <div class="nm-divider-line" style></div>
    </div>
    <br>

    <div class="container text-center">
        <div class="row">
            @foreach($product as $key => $exp)
                <div class="col-sm-3">
                    <div class="item-image-wrapper">
                        <div class="single-items">
                            <div class="iteminfo text-xs-center">
                                <a data-toggle="modal" data-target="#product_view" onclick="generateModal('{{$exp->images}}','{{$exp->price}}','{{$exp->title}}','{{$exp->description}}')"><img src="{{$exp->images}} " style="height: 250px;" alt=""></a>
                                <h2>${{$exp->price}}</h2>
                                <p style="height: 70px;">{{$exp->title}}</p>
                                <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade product_view" id="product_view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 product_img">
                            <img id="modalImg" src="https://media2.vatgia.vn/pictures/fullsize/2016/07/15/htciw1468569739.png"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6 product_content">
                            <h3><span id="modalTitle"></span></h3>
                            <hr>
                            <p id="modalDescription"></p>
                            <center>
                                <h3 class="cost" id="modalPrice"><span class="glyphicon glyphicon-usd"></span>
                                    <small class="pre-cost"></small>
                                </h3>
                            </center>
                            <div class="row">
                                <p class="pp">Quantity : </p>
                                <footer class="content">
                                    <span class="qt-minus">-</span>
                                    <span class="qt">1</span>
                                    <span class="qt-plus">+</span>
                                </footer>
                            </div>
                            <div class="space-ten"></div>
                            <div class="btn-ground">
                                <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="links" style="margin-left: 470px">
        {{$product->links()}}</div>
    </div>

@endsection
