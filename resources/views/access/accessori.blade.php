@extends('layouts.master')
@section('title')
@endsection
@section('slide-show')
    @include('partials.slideshow')
@endsection
@section('content')
    <br>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <br>
    <br>
    <!--container end.//-->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-2">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i>Dog Accessories</div>
                    <ul class="list-group category_block">
                        <li class="list-group-item"><a href="necklacedog">Necklace for dogs</a></li>
                        <li class="list-group-item"><a href="clothesdog">Clothes for dogs</a></li>
                        <li class="list-group-item"><a href="chaindog">Chain</a></li>
                        <li class="list-group-item"><a href="bowdog">Bow for dog</a></li>
                        <li class="list-group-item"><a href="brushdog">Brush for dogs</a></li>
                    </ul>
                </div>

                <div class="card bg-light mb-2">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Cat shop</div>
                    <ul class="list-group category_block">
                        <li class="list-group-item"><a href="necklacecat">Necklace for cat</a>
                        </li>
                        <li class="list-group-item"><a href="clothescat">Clothes for cat</a></li>
                        <li class="list-group-item"><a href="bowandhatcat">Bow and hat</a></li>
                        <li class="list-group-item"><a href="shaketheneck">Shake the neck for cats</a></li>
                    </ul>
                </div>

                <div class="card bg-light mb-2">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> New Product</div>
                    <div class="card-body">
                        <img class="img-fluid" src="http://petdn.com/files/sanpham/315/1/png/vong-co-da-co-chuong-cho-cho-meo.png" />
                        <h5 class="card-title">Necklace
                        </h5>
                        <p class="card-text">Bow for new cats.</p>
                        <div class="float-left" style="font-size: 16px; font-weight: bold;">$10</div>
                        <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <a href="productdetails"><img class="card-img-top" src="https://www.petmart.vn/wp-content/uploads/2016/09/vong-co-xich-ky-luat-cho-cho.jpg" alt="Card image cap"></a>
                            <div class="card-body">
                                <h6>Necklace of iron wire</h6>
                                <div class="clearfix">
                                    <div class="float-left" style="font-size: 16px; font-weight: bold;">$13</div>
                                    <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <a href="productdetails"><img class="card-img-top" src="http://static.nongsanbanbuon.com/media/images/1/products/13/durable-pet-vong-co-cho-cho-co-the-dieu-chinh-3-m-phan-quang-nylon-dogjpg640x640-1511193091.jpg" alt="Card image cap"></a>                   <div class="card-body">
                                <h6>Round Neck</h6>
                                <div class="clearfix">
                                    <div class="float-left" style="font-size: 16px; font-weight: bold;">$17</div>
                                    <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <a href="productdetails"><img class="card-img-top" src="http://pettysoc.com/wp-content/uploads/2016/02/968_1_968_vong_co_chuong.jpg"></a>                            <div class="card-body">
                                <h6>Necklace knit</h6>
                                <div class="clearfix">
                                    <div class="float-left" style="font-size: 16px; font-weight: bold;">$12</div>
                                    <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <a href="productdetails"><img class="card-img-top" src="http://www.pet-house.com.vn/res/product/album/F5A8B04D.jpg " alt="Card image cap"></a>                          <div class="card-body">
                                <h6>Red necklace</h6>
                                <div class="clearfix">
                                    <div class="float-left" style="font-size: 16px; font-weight: bold;">$20</div>
                                    <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <a href="productdetails"><img class="card-img-top" src="https://media2.vatgia.vn/pictures/fullsize/2016/07/15/htciw1468569739.png" alt="Card image cap"></a>                           <div class="card-body">
                                <h4>Blue necklace</h4>
                                <div class="clearfix">
                                    <div class="float-left" style="font-size: 16px; font-weight: bold;">18</div>
                                    <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <a href="productdetails"><img class="card-img-top" src="https://vn-live-02.slatic.net/original/7a39abd1248d2c2f19f8d8bde6226278.jpg" alt="Card image cap"></a>                            <div class="card-body">
                                <h6>Necklace with pendulum</h6>
                                <div class="clearfix">
                                    <div class="float-left" style="font-size: 16px; font-weight: bold;">$7</div>
                                    <a href="#" class="btn btn-danger float-right" role="button"> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
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
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        .clearfix:after {
            display: block;
            clear: both;
            content: ""
        }
        .carousel-item{

            min-height:300px;
            background:#ccc; }
        /*
** Style Simple Ecommerce Theme for Bootstrap 4
** Created by T-PHP https://t-php.fr/43-theme-ecommerce-bootstrap-4.html
*/
        .bloc_left_price {
            color: #c01508;
            text-align: center;
            font-weight: bold;
            font-size: 150%;
        }
        .category_block li:hover {
            background-color: #007bff;
        }
        .category_block li:hover a {
            color: #ffffff;
        }
        .category_block li a {
            color: #343a40;
        }
        .add_to_cart_block .price {
            color: #c01508;
            text-align: center;
            font-weight: bold;
            font-size: 200%;
            margin-bottom: 0;
        }

        .card-title{
            color: #0D0A0A;
        }
        .add_to_cart_block .price_discounted {
            color: #343a40;
            text-align: center;
            text-decoration: line-through;
            font-size: 140%;
        }
        .product_rassurance {
            padding: 10px;
            margin-top: 15px;
            background: #ffffff;
            border: 1px solid #6c757d;
            color: #6c757d;
        }
        .product_rassurance .list-inline {
            margin-bottom: 0;
            text-transform: uppercase;
            text-align: center;
        }
        .product_rassurance .list-inline li:hover {
            color: #343a40;
        }
        .reviews_product .fa-star {
            color: gold;
        }
        .pagination {
            margin-top: 20px;
        }
        footer {
            background: #343a40;
            padding: 40px;
        }
        footer a {
            color: #f8f9fa!important
        }


    </style>
@endsection
