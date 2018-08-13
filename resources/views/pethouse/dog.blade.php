@extends('layouts.master')
@section('title')
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

    <link rel="stylesheet" href="/css/accessories-product.css" type="text/css">
    <br>
    <form class="woocommerce-ordering" method="get">
        <select name="orderby" class="orderby">
            <option value="menu_order" selected="selected">Cat</option>
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
    <br>
    <header class="woocommerce-products-header">
        <h1 class="woocommerce-products-header__title page-title">Shop Accessories</h1>

    </header>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="https://kenh14cdn.com/2017/cute-dog-shiba-inu-ryuji-japan-17-1492164409898.jpg"
                                        alt=""></a>
                            <h2>$12</h2>
                            <p>Is a dog</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="https://kenh14cdn.com/2017/cute-dog-shiba-inu-ryuji-japan-72-1492164409934.jpg"
                                        alt=""></a>
                            <h2>$20</h2>
                            <p>Is a dog</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="https://kenh14cdn.com/2018/4/9/photo-1-15232339956202010719818.jpg "
                                        alt=""></a>
                            <h2>$17</h2>
                            <p>Is a dog</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="http://nanapet.com/upload/4-Herman-After-Square-5792a4493f0cf__700.jpg"
                                        alt=""></a>
                            <h2>$9</h2>
                            <p>Is a dog</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="https://kenh14cdn.com/2016/dog14-1456186399564.jpg" alt=""></a>
                            <h2>$21</h2>
                            <p>Is a dog</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/06/144/20761107/1_129770.jpg"
                                        alt=""></a>
                            <h2>$7</h2>
                            <p>Is a dog</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="http://nanapet.com/upload/HAIRY-before-and-after-transformations-of-dog-haircuts-5794202062053__700.jpg"
                                        alt=""></a>
                            <h2>$22</h2>
                            <p>Is a dog</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="http://static2.yan.vn/YanNews/2167221/201804/nhung-hinh-anh-cho-thay-husky-la-giong-cho-ngo-ngan-so-mot-221cf383.jpg"
                                        alt=""></a>
                            <h2>$10</h2>
                            <p>Is a dog</p>
                            <center><a href="" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                    to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="https://kenh14cdn.com/2016/c1-1470817918028.jpg" alt=""></a>
                            <h2>$21</h2>
                            <p>Is a dog</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="http://nanapet.com/upload/5-Raider_After-Square-5792a3d1f0e81__700.jpg"
                                        alt=""></a>
                            <h2>$7</h2>
                            <p>Is a dog</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="https://cdn.pose.com.vn/legacy/images/baiviet/201607/scrape_14679018215976_s4-1467787655531.jpg"
                                        alt=""></a>
                            <h2>$22</h2>
                            <p>Is dog</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvKTU0yxe8QHzGQIrxRc7AbEJNF20-8X5GpalsaJkEp_tEBrrnyQ"
                                        alt=""></a>
                            <h2>$10</h2>
                            <p>Dog</p>
                            <center><a href="" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                    to cart</a></center>
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
                            <img src="http://nanapet.com/upload/4-Herman-After-Square-5792a4493f0cf__700.jpg"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6 product_content">
                            <h3>Name <span>Necklace with lead</span></h3>
                            <hr>
                            <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <center>
                                <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> $10
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
@endsection
