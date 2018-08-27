@extends('layouts.master')
@section('title')
@endsection
@section('scripts')
    <script src="/js/modal-product.js" type="text/javascript"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
@section('content')
    <link rel="stylesheet" href="/css/detail.css" type="text/css">
    <link rel="stylesheet" href="/css/accessories-product.css" type="text/css">
    <div class="bread-bar bg-grey" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/accessories">Accessories</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-7">

                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1">
                                <img  src="{{$product_detail->images}}" style="max-width: 70%;">
                            </div>
                        </div>

                    </div>
                    <div class="details col-md-5">
                        <h5 class="product-title">{{$product_detail->title}}</h5>
                        <p>{{$product_detail->description}}</p>
                        <div class="row">
                            <h6 class="pp">Quantity : </h6>
                            <footer class="content">
                                <span class="qt-minus">-</span>
                                <span class="qt">1</span>
                                <span class="qt-plus">+</span>
                            </footer>
                        </div>
                        <br><center><h4 class="price"> <span>$ {{$product_detail->price}}</span></h4></center><br>
                        <a href="/add-to-cart?id={{$product_detail->id}}&quantity=1" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection

