@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
@endsection
@section('styles')
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
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fa fa-laptop fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                class="fa fa-lock fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
    <center><h2>SALE PRODUCT</h2></center>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card sale">
                    <a href="#">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sale">
                    <a href="#">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sale">
                    <a href="#">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card sale">
                    <a href="#">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sale">
                    <a href="#">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sale">
                    <a href="#">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <center><h2>NEW PRODUCT</h2></center>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card hot">
                    <a href="#">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hot">
                    <a href="#">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hot">
                    <a href="#">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
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
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hot">
                    <a href="#">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hot">
                    <a href="#">
                        <img src="http://diendanlequydon.com/downloads/image_prv/29/28054.jpg">
                    </a>
                    <div class="clearfix">
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <style>
        .sale img {
            width: 296px;
            height: 260px;
        }

        .sale .clearfix div {
            padding: 5px;
        }

        .sale .clearfix a {
            border: solid 1px #007bff;
            background: #007bff;
        }

        .sale {
            margin-left: 30px;
            position: relative;
            width: 300px;
            height: 300px;
            border: solid 2px #d1d1d1;
        }

        .sale:before {
            position: absolute;
            content: '';
            top: 0px;
            right: 0px;
            width: 0;
            height: 0;
            border-top: 80px solid #ff0000;
            border-left: 80px solid transparent;
        }

        .sale:after {
            position: absolute;
            top: 16px;
            right: 5px;
            transform: rotate(45deg);
            font-family: Tahoma;
            content: "-15%";
            font-size: 15px;
            color: #fff;
            font-weight: bold;
        }

        .hot img {
            width: 296px;
            height: 260px;
        }

        .hot .clearfix div {
            padding: 5px;
        }

        .hot {
            margin-left: 30px;
            position: relative;
            width: 300px;
            height: 300px;
            border: solid 2px #d1d1d1;
        }

        .hot:before {
            position: absolute;
            content: '';
            top: 0px;
            right: 0px;
            width: 0;
            height: 0;
            border-top: 80px solid #ff0000;
            border-left: 80px solid transparent;
        }

        .hot:after {
            position: absolute;
            top: 16px;
            right: 5px;
            transform: rotate(40deg);
            font-family: Tahoma;
            content: "New";
            font-size: 15px;
            color: #fff;
            font-weight: bold;
        }

        .hot .clearfix a {
            border: solid 1px #007bff;
            background: #007bff;
        }
    </style>
@endsection