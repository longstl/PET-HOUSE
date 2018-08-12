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
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="item-image-wrapper">
                    <div class="single-items">
                        <div class="iteminfo text-xs-center">
                            <a data-toggle="modal" data-target="#product_view"><img src="https://media2.vatgia.vn/pictures/fullsize/2016/07/15/htciw1468569739.png" alt=""></a>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="https://vn-live-02.slatic.net/original/7a39abd1248d2c2f19f8d8bde6226278.jpg" alt=""></a>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="http://www.pet-house.com.vn/res/product/album/F5A8B04D.jpg " alt=""></a>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="http://pettysoc.com/wp-content/uploads/2016/02/968_1_968_vong_co_chuong.jpg" alt=""></a>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="http://static.nongsanbanbuon.com/media/images/1/products/13/durable-pet-vong-co-cho-cho-co-the-dieu-chinh-3-m-phan-quang-nylon-dogjpg640x640-1511193091.jpg" alt=""></a>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="http://petcare.vn/wp-content/uploads/2016/06/x18.jpg" alt=""></a>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="https://www.petmart.vn/wp-content/uploads/2016/09/vong-co-xich-ky-luat-cho-cho.jpg" alt=""></a>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="http://lolipet.net/wp-content/uploads/d%C3%A2y-d%E1%BA%AFt-+-v%C3%B2ng-c%E1%BB%95-da-t%E1%BA%BFt-th%E1%BB%ABng-3.jpg" alt=""></a>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="http://sc01.alicdn.com/kf/HTB1_DwsedrJ8KJjSspaq6xuKpXaU/Automatic-Retractable-Dog-Leash-Break-Button-with.jpg" alt=""></a>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="https://cf.shopee.vn/file/cf3c71c1063a31ee41e93e190c17c109" alt=""></a>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="https://bizweb.dktcdn.net/100/071/936/products/vong-co-chong-cho-sua-casfuy.jpg?v=1513924200173" alt=""></a>
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
                            <a data-toggle="modal" data-target="#product_view"><img src="https://file.yes24.vn/Upload/ProductImage/trandanh/1842011_L.png" alt=""></a>
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
                            <img src="https://media2.vatgia.vn/pictures/fullsize/2016/07/15/htciw1468569739.png" class="img-fluid">
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
            float: right;
        }
        .woocommerce .woocommerce-ordering {
            margin: 0 0 1em;
            float: left;
        }
        .woocommerce .woocommerce-ordering, .woocommerce-page .woocommerce-ordering {
            float: right;
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
