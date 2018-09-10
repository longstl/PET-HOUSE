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
@section('content')
    <link rel="stylesheet" href="/css/accessories-product.css" type="text/css">
    <div class="container">
            <img src="https://i.pinimg.com/originals/b6/0b/85/b60b85a2ddfe59b7a5da3ab4efe12d7d.jpg" style="width: 90%;margin-top: 30px;">
    </div>
    <br><br>
    <div class="nm-divider separator_align_center">
       <center><h3 style="font-size: 35px;" class="nm-divider-title medium">All products searched :</h3></center>
        <div class="nm-divider-line" style></div>
    </div>
    <br>
    <div class="container text-center">
        <div class="row">
            @foreach($product as $key => $exp)
                <div class="col-sm-3">
                    <div class="item-image-wrapper">
                        <div class="single-items">
                            <div class="iteminfo text-xs-center">
                                <a href="{{route('detailcat',$exp->id)}}"><img src="{{$exp->images}} " style="height: 250px;" alt=""></a>
                                <p style="height: 70px;">{{$exp->title}}</p>
                                <h2>${{$exp->price}}</h2>
                                <center><a href="/add-to-cart?id={{$exp->id}}&quantity=1"
                                           class="btn btn-secondary add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{--@else--}}
        {{--<div class="alert alert-info">No products found in the product list , please<a--}}
                    {{--href="/" title="come back" class="btn-link">click here</a>to return to the home page.--}}
        {{--</div>--}}
    {{--@endif--}}
@endsection
