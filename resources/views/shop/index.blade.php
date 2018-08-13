@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
@endsection