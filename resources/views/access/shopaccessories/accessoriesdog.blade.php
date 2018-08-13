@extends('layouts.master')
@section('title')
@endsection
@section('slide-show')
    @include('partials.slideshow')
@endsection
@section('content')
    <link rel="stylesheet" href="/css/accessories-product.css" type="text/css">
    <br>
    <!------ Include the above in your HEAD tag ---------->
    <br>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html">Dog Accessories</a></li>
                        <li class="active">Necklace</li>
                    </ol>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                </div>
            </div>
        </div>
    </div>
    <div class="nm-divider separator_align_center">
        <h2 class="nm-divider-title medium">Dog Accessories</h2>
        <br>
        <div class="nm-divider-line" style></div>
    </div>
    <br>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="https://media2.vatgia.vn/pictures/fullsize/2016/07/15/htciw1468569739.png"
                                        alt=""></a>
                            <h2>$12</h2>
                            <p>Blue necklace</p>
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
                                        src="https://vn-live-02.slatic.net/original/7a39abd1248d2c2f19f8d8bde6226278.jpg"
                                        alt=""></a>
                            <h2>$20</h2>
                            <p>Necklace knit</p>
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
                                        src="http://www.pet-house.com.vn/res/product/album/F5A8B04D.jpg " alt=""></a>
                            <h2>$17</h2>
                            <p>Red necklace</p>
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
                                        src="http://pettysoc.com/wp-content/uploads/2016/02/968_1_968_vong_co_chuong.jpg"
                                        alt=""></a>
                            <h2>$9</h2>
                            <p>Round Neck</p>
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
                                        src="http://static.nongsanbanbuon.com/media/images/1/products/13/durable-pet-vong-co-cho-cho-co-the-dieu-chinh-3-m-phan-quang-nylon-dogjpg640x640-1511193091.jpg"
                                        alt=""></a>
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
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
                                        src="http://petcare.vn/wp-content/uploads/2016/06/x18.jpg" alt=""></a>
                            <h2>$7</h2>
                            <p>necklace with lead</p>
                        </div>
                        <center><a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                to cart</a></center>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img
                                        src="https://www.petmart.vn/wp-content/uploads/2016/09/vong-co-xich-ky-luat-cho-cho.jpg"
                                        alt=""></a>
                            <h2>$22</h2>
                            <p>Necklace of iron wire</p>
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
                                        src="http://lolipet.net/wp-content/uploads/d%C3%A2y-d%E1%BA%AFt-+-v%C3%B2ng-c%E1%BB%95-da-t%E1%BA%BFt-th%E1%BB%ABng-3.jpg"
                                        alt=""></a>
                            <h2>$10</h2>
                            <p>Necklace with lead</p>
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
                                        src="http://sc01.alicdn.com/kf/HTB1_DwsedrJ8KJjSspaq6xuKpXaU/Automatic-Retractable-Dog-Leash-Break-Button-with.jpg"
                                        alt=""></a>
                            <h2>$21</h2>
                            <p>Necklace with pendulum</p>
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
                                        src="https://cf.shopee.vn/file/cf3c71c1063a31ee41e93e190c17c109" alt=""></a>
                            <h2>$7</h2>
                            <p>necklace with lead</p>
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
                                        src="https://bizweb.dktcdn.net/100/071/936/products/vong-co-chong-cho-sua-casfuy.jpg?v=1513924200173"
                                        alt=""></a>
                            <h2>$22</h2>
                            <p>Necklace of iron wire</p>
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
                                        src="https://file.yes24.vn/Upload/ProductImage/trandanh/1842011_L.png"
                                        alt=""></a>
                            <h2>$10</h2>
                            <p>Necklace with lead</p>
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
                            <img src="https://media2.vatgia.vn/pictures/fullsize/2016/07/15/htciw1468569739.png"
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
