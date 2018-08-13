@extends('layouts.master')
@section('title')
@endsection
@section('slide-show')
    @include('partials.slideshow')
@endsection
@section('content')
    <br>
    <link rel="stylesheet" href="/css/accessories-product.css" type="text/css">   <!------ Include the above in your HEAD tag ---------->
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
                        <li class="active">Cat</li>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="https://cdn.pose.com.vn/legacy/images/baiviet/201609/scrape_14734787708583_m10-1473395779257.jpg" alt=""></a>
                            <h2>$12</h2>
                            <p>Is a cat</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://dantricdn.com/k:c05a76d21c/2016/02/26/7-1456481352010/ngam-nang-meo-co-doi-mat-dep-nhat-the-gioi-noi-nhu-con-tren-mang.jpg" alt=""></a>
                            <h2>$20</h2>
                            <p>Is a cat</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://baomoi-photo-1-td.zadn.vn/w700_r1/18/04/14/139/25661852/8_106289.jpg " alt=""></a>
                            <h2>$17</h2>
                            <p>Is a cat</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
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
                            <p>Is a cat</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="https://kenh14cdn.com/2016/1-1462079008911.jpg" alt=""></a>
                            <h2>$21</h2>
                            <p>Is a cat</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://kenh14cdn.com/2016/c1-1478170863250.jpg" alt=""></a>
                            <h2>$7</h2>
                            <p>Is a cat</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="http://img.lostbird.vn/2017/12/15/38099/14.jpg" alt=""></a>
                            <h2>$22</h2>
                            <p>Is a cat</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="http://mypetsvn.com/wp-content/uploads/2018/04/giadinhmoi1-4-1012.jpg" alt=""></a>
                            <h2>$10</h2>
                            <p>Is a cat</p>
                            <center><a href="" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="https://tapchinongnghiep.net/wp-content/uploads/2018/04/meo-anh-long-ngan-cat-9.jpg" alt=""></a>
                            <h2>$21</h2>
                            <p>Is a cat</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://kenh14cdn.com/2016/m4-1482995505079.jpg" alt=""></a>
                            <h2>$7</h2>
                            <p>Is a cat</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="http://cms.kienthuc.net.vn/zoomh/500/uploaded/hongngan/2017_04_04/d/chet-me-co-meo-mat-to-xinh-dep-nhat-nhat-ban-hinh-2.jpg" alt=""></a>
                            <h2>$22</h2>
                            <p>NIs a cat</p>
                            <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="http://img.lostbird.vn/2017/12/15/38099/9.jpg" alt=""></a>
                            <h2>$10</h2>
                            <p>Is a cat</p>
                            <center><a href="" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
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
                            <img src="http://mypetsvn.com/wp-content/uploads/2018/04/giadinhmoi1-4-1012.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-6 product_content">
                            <h3>Name <span>Necklace with lead</span></h3><hr>
                            <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <center><h3 class="cost"><span class="glyphicon glyphicon-usd"></span> $10 <small class="pre-cost"></small></h3></center>
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
                                <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>
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
