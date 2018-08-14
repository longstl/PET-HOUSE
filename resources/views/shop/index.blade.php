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
    <center><h2 class="text-muted section-subheading">Discounted</h2  ></center>
    <hr>

    <div class="container text-xl-center">
        <div class="row">
            <div class="col-md-4">
                <div class="card sale">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="https://kenh14cdn.com/2017/cute-dog-shiba-inu-ryuji-japan-17-1492164409898.jpg">
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
                        <img src="https://baomoi-photo-1-td.zadn.vn/w700_r1/18/04/14/139/25661852/8_106289.jpg">
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
                        <img src="https://kenh14cdn.com/2018/4/9/photo-1-15232339956202010719818.jpg">
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
                        <img src="http://nanapet.com/upload/4-Herman-After-Square-5792a4493f0cf__700.jpg">
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
                        <img src="https://kenh14cdn.com/2016/1-1462079008911.jpg">
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
                        <img src="https://kenh14cdn.com/2016/dog14-1456186399564.jpg">
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
    <center><h2 class="text-muted section-subheading">New Pets</h2  ></center>
    <hr>
    <div class="container text-xl-center">
        <div class="row">
            <div class="col-md-4">
                <div class="card hot">
                    <a data-toggle="modal" data-target="#product_view">
                        <img src="https://kenh14cdn.com/2016/c1-1478170863250.jpg">
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
                        <img src="https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/06/144/20761107/1_129770.jpg">
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
                        <img src="http://img.lostbird.vn/2017/12/15/38099/14.jpg">
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
                        <img src="http://nanapet.com/upload/HAIRY-before-and-after-transformations-of-dog-haircuts-5794202062053__700.jpg">
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
                        <img src="http://mypetsvn.com/wp-content/uploads/2018/04/giadinhmoi1-4-1012.jpg">
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
                        <img src="https://cdn.pose.com.vn/legacy/images/baiviet/201609/scrape_14734787708583_m10-1473395779257.jpg">
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
                            <img src="https://cdn.pose.com.vn/legacy/images/baiviet/201609/scrape_14734787708583_m10-1473395779257.jpg" class="img-fluid">
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