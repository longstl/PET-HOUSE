@extends('layouts.master')
@section('title')
@endsection
@section('scripts')
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
                        <li><a href="/pethousecat">Adopt A Pet / Cat</a></li>
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
                        <br><center><h4 class="price"> <span>$ {{$product_detail->price}}</span></h4></center><br>
                        <a href="#" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
                <br>
                <div class="col-xs-9">
                    <ul class="menu-items">
                        <h5>More information</h5>
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <small>
                                The Bulldog is moderate in size, heavy, and built low to the ground. They are strong, kind, amiable, and courageous. This breed is not vicious or aggressive and is quite dignified. They possess a passive demeanor and have a quirky sense of humor.
                            </small>
                        </p>
                        <small>
                            <li>mother of the dog : {{$product_detail->father}}</li>
                            <li>father of the dog : {{$product_detail->mother}}</li>
                            <li>weight : 10 kg. </li>
                            <li>License :</li>
                            </ul>
                        </small>

                        <img src="{{$product_detail->paper}}" style="max-width: 70%;" >
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
