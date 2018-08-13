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

    <link rel="stylesheet" href="/css/accessories-product.css" type="text/css">
    <link rel="stylesheet" href="/css/index.css" type="text/css">
    <link rel="stylesheet" href="/css/cursor.css" type="text/css">
    <link rel="stylesheet" href="/css/cart-sale.css" type="text/css">
    @endsection
@section('slide-show')
    @include('partials.slideshow')
@endsection
@section('content')
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Pet House</h2>
                    <h3 class="text-muted section-subheading">Welcome to the Pet House</h3>
                </div>
            </div><br><br>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Order easily</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fas fa-truck fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Delivery fast</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="far fa-handshake fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Friendly employee</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section><br><br>
    <center><h2>SALE PRODUCT</h2></center>
    <hr>

    <div class="container text-xl-center">
        <div class="row">
            <div class="col-md-4">
                <div class="card sale">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <h2>$21</h2>
                        <p>Necklace with pendulum</p>
                        <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                        class="fa fa-shopping-cart"></i>Add to cart</a></center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sale">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="clearfix">
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sale">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="clearfix">
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row ">
            <div class="col-md-4">
                <div class="card sale">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="clearfix">
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sale">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="clearfix">
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sale">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="clearfix">
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <center><h2>NEW PRODUCT</h2></center>
    <hr>
    <div class="container text-xl-center">
        <div class="row">
            <div class="col-md-4">
                <div class="card hot">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="clearfix">
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hot">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="clearfix">
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hot">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="clearfix">
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card hot">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="clearfix">
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hot">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="clearfix">
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hot">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="clearfix">
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <div class="modal fade product_view" id="product_view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 product_img">
                            <img src="http://mypetsvn.com/wp-content/uploads/2018/04/giadinhmoi1-4-1012.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-6 product_content">
                            <h3>Name <span>Necklace with lead</span></h3><hr>
                            <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <center><h3 class="cost"><span class="glyphicon glyphicon-usd"></span> $10 <small class="pre-cost"></small></h3></center>
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