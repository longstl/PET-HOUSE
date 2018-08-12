@extends('layouts.master')
@section('title')
@endsection
@section('slide-show')
    @include('partials.slideshow')
@endsection
@section('content')
    <br>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->
    <br>
    <div class="bread-bar bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html">Dog Accessories</a></li>
                        <li class="active">Chó Béc Dê</li>
                    </ol>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                </div>
            </div>
        </div>
    </div>
    <form class="woocommerce-ordering" method="get">
        <select name="orderby" class="orderby">
            <option value="menu_order" selected="selected">Chó Béc Dê</option>
            <option value="popularity">Sort by popularity</option>
            <option value="rating">Sort by average rating</option>
            <option value="date">Sort by newness</option>
            <option value="price">Sort by price: low to high</option>
            <option value="price-desc">Sort by price: high to low</option>
        </select>
        <input type="hidden" name="paged" value="1">
    </form><br>
    <header class="woocommerce-products-header">
        <h1 class="woocommerce-products-header__title page-title">Shop Accessories</h1>

    </header>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://kenh14cdn.com/2017/cute-dog-shiba-inu-ryuji-japan-17-1492164409898.jpg" alt=""></a>
                            <h2>$12</h2>
                            <p>Blue necklace</p>
                            <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://kenh14cdn.com/2017/cute-dog-shiba-inu-ryuji-japan-72-1492164409934.jpg" alt=""></a>
                            <h2>$20</h2>
                            <p>Necklace knit</p>
                            <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://kenh14cdn.com/2018/4/9/photo-1-15232339956202010719818.jpg " alt=""></a>
                            <h2>$17</h2>
                            <p>Red necklace</p>
                            <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="http://nanapet.com/upload/4-Herman-After-Square-5792a4493f0cf__700.jpg" alt=""></a>
                            <h2>$9</h2>
                            <p>Round Neck</p>
                            <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://kenh14cdn.com/2016/dog14-1456186399564.jpg" alt=""></a>
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/06/144/20761107/1_129770.jpg" alt=""></a>
                            <h2>$7</h2>
                            <p>necklace with lead</p>
                            <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="http://nanapet.com/upload/HAIRY-before-and-after-transformations-of-dog-haircuts-5794202062053__700.jpg" alt=""></a>
                            <h2>$22</h2>
                            <p>Necklace of iron wire</p>
                            <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="http://static2.yan.vn/YanNews/2167221/201804/nhung-hinh-anh-cho-thay-husky-la-giong-cho-ngo-ngan-so-mot-221cf383.jpg" alt=""></a>
                            <h2>$10</h2>
                            <p>Necklace with lead</p>
                            <a href="" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://kenh14cdn.com/2016/c1-1470817918028.jpg" alt=""></a>
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
                            <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="http://nanapet.com/upload/5-Raider_After-Square-5792a3d1f0e81__700.jpg" alt=""></a>
                            <h2>$7</h2>
                            <p>necklace with lead</p>
                            <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://cdn.pose.com.vn/legacy/images/baiviet/201607/scrape_14679018215976_s4-1467787655531.jpg" alt=""></a>
                            <h2>$22</h2>
                            <p>Necklace of iron wire</p>
                            <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvKTU0yxe8QHzGQIrxRc7AbEJNF20-8X5GpalsaJkEp_tEBrrnyQ" alt=""></a>
                            <h2>$10</h2>
                            <p>Necklace with lead</p>
                            <a href="" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade product_view" id="product_view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 product_img">
                            <img src="http://nanapet.com/upload/4-Herman-After-Square-5792a4493f0cf__700.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-6 product_content">
                            <h3>Name <span>Necklace with lead</span></h3><hr>
                            <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> $10 <small class="pre-cost"></small></h3>
                            <div class="row">
                                Enter the quantity :
                                <div class="col-md-6 col-sm-4 col-xs-12">
                                    <div class="qty-changer">
                                        <input class="qty-input form-group" type="number" value="1"/>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>

                            <div class="space-ten"></div>
                            <div class="btn-ground">
                                <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    <style>
        element.style {
        }
        h1 {
            font-size: 5px;
            color: #0d5bdd;
            font-weight: normal;
            margin: 10px 0;
            font-family: 'Open Sans', sans-serif;
            display: block;
            font-size: 2em;
            -webkit-margin-before: 0.67em;
            -webkit-margin-after: 0.67em;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
            font-weight: bold;
        }
        .nm-divider.separator_align_center .nm-divider-title, .nm-divider.separator_align_right .nm-divider-title {
            padding-left: 14px;
        }
        .nm-divider .nm-divider-title {
            position: relative;
            z-index: 100;
            display: inline-block;
            font-size: 22px;
            line-height: 1.6;
            padding-right: 14px;
            background: #fff;
        }
        .nm-divider .nm-divider-line {
            position: absolute;
            top: 102%;
            left: 0;
            z-index: 10;
            display: block;
            content: " ";
            width: 100%;
            height: 1px;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            background: #eee;
        }
        element.style {
        }
        .woocommerce-ordering{

            padding-top: 4px;
            padding-left: 12px;
            float: left;
        }
        .woocommerce .woocommerce-ordering {
            margin: 0 0 1em;
            float: left;
        }
        .woocommerce .woocommerce-ordering, .woocommerce-page .woocommerce-ordering {
            float: left;
        }

        .bg-grey {background:white}
        .breadcrumb {background: none; margin: 0;font-weight: 300;padding-left: 0; font-size: 13px;}
        .breadcrumb a {color: #999;}
        .breadcrumb > .active {color: #696969;}
        .breadcrumb > li + li::before {content: "\203A";color: #999;padding: 0 12px;}

        button.qty-change{
            height: 30px;
            width: 30px;
            border-radius: 50%;
            background: #fff;
            border: 1px solid #e3e3e3;
        }

        .qty-input{
            height: 30px;
            width: 80px;
            text-align: center;
        }
        .cost{
            color: #0f23fe;
        }
        .product_view .modal-dialog{max-width: 750px; width: 50%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 15px 0;}
        .btn-secondary:hover{
            background: #e01125;
        }
        .sale {
            position: relative;
            width: 300px;
            height: 320px;
        }
        .sale:before {
            position: absolute;
            content: '';
            top: 0px;
            right: 0px;
            width: 0;
            height: 0;
            border-top: 100px solid red;
            border-left: 100px solid transparent;
        }
        .sale:after {
            position: absolute;
            top: 16px;
            right: -5px;
            transform: rotate(45deg);
            font-family: Tahoma;
            content: "-15%";
            font-size: 25px;
            color: #fff;
            font-weight: bold;
        }
        .item-image-wrapper {
            border: 1px solid #696969;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 3px 3px 5px 6px #ccc;}
        .single-items {
            position: relative;}
        .iteminfo {
            position: relative;}
        .iteminfo h2 {
            color: #0f23fe;
            font-size: 24px;
            font-weight: 700;}
        .item-overlay
        {background: rgba(15, 186, 254, 0.88);
            top: 0;
            display: none;
            height: 0;
            position: absolute;
            -webkit-transition: height 500ms ease 0s;
            transition: height 500ms ease 0s;
            width: 100%;
            display: block;}
        .overlay-content
        { bottom: 0;
            position: absolute;
            bottom: 0;
            text-align: center;
            width: 100%;}
        .item-overlay h2 {
            color: #fff;
            font-size: 24px;
            font-weight: 700;}
        .item-overlay p {
            font-size: 14px;
            font-weight: 400;
            color: #fff;}
        .item-overlay, .add-to-cart {
            background: #fff;
            border: 0 none;
            border-radius: 0;
            color: #e01125;
            font-size: 15px;
            margin-bottom: 25px;}
        .choose {
            border-top: 1px solid #F7F7F0;}
        .choose ul li a {
            color: #B3AFA8;
            font-size: 13px;
            padding-left: 0;
            padding-right: 0;}
        .single-items:hover .item-overlay {
            display: block;  height: 100%;
            background: #007bffd1;
        }
        .overlay-content {
            bottom: 0;
            position: absolute;
            bottom: 0;
            text-align: center;
            width: 100%;}
        .iteminfo img {
            width: 100%;}
    </style>
@endsection
