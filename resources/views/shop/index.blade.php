@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
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
@section('styles')
    <link rel="stylesheet" href="/css/index.css" type="text/css">
    <link rel="stylesheet" href="/css/cursor.css" type="text/css">
    <link rel="stylesheet" href="/css/cart-sale.css" type="text/css">
    @endsection
@section('slide-show')
    @include('partials.slideshow')
@endsection
@section('content')
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-muted section-subheading">Welcome to the Pet House</h2  >
                </div>
            </div><br><br>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Order easily</h4>
                    <p class="text-muted">When see the product, the customer could be cick given the output to the store and the order to take a quick way and convenient.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fas fa-truck fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Delivery fast</h4>
                    <p class="text-muted">After successful ordering, we will process and check orders. Staff will review orders, contact with customers and ship quickly.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="far fa-handshake fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Friendly employee</h4>
                    <p class="text-muted">Online consultants are very enthusiastic and detailed, in addition our stores have beautiful and friendly staff.</p>
                </div>
            </div>
        </div>
    </section><br><br>
    <div class="container text-center">
        <center><h2 class="text-muted section-subheading">New Dog</h2  ></center>
        <hr>
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
        <center><h2 class="text-muted section-subheading">New kitten</h2  ></center>
        <hr>
        <div class="row">
            @foreach($product2 as $key => $exp)
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
        <center><h2 class="text-muted section-subheading">New Accessories</h2  ></center>
        <hr>
        <div class="row">
            @foreach($product3 as $key => $exp)
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
        <center><h2 class="text-muted section-subheading">New Food</h2  ></center>
        <hr>
        <div class="row">
            <h3></h3>
            @foreach($product4 as $key => $exp)
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
                            <img id="modalImg" class="img-fluid">
                        </div>
                        <div class="col-md-6 product_content">
                            <h3 id="modalTitle"> <span></span></h3><hr>
                            <p id="modalDescription"></p>
                            <center><h3 id="modalPrice" class="cost"><span class="glyphicon glyphicon-usd"></span> <small class="pre-cost"></small></h3></center>
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
                                <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection