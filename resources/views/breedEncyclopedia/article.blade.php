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
    <h2 style="margin-left: 30px;">Breed Encyclopedia</h2><br>
    <div class="col-12">
        @foreach($article as $key=>$arl)
        <div class="modal-body">
            <div class="row">
                <div class="col-md-3 ">
                    <a data-toggle="modal" data-target="#product_view"><img src="{{$arl->images}} " style="height: 250px;" alt=""></a>
                </div>
                <div class="col-md-9 ">
                    <h5><span>{{$arl->title}}</span></h5>
                    <hr>
                    <p> {{$arl->content}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <br>
@endsection
