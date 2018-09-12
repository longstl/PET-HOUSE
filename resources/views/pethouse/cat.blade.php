@extends('layouts.master')
@section('title')
@endsection

@section('content')

    <link rel="stylesheet" href="/css/accessories-product.css" type="text/css">    <br>
    <div class="bread-bar bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/pethousecat">Adopt A Pet / Cat</a></li>
                    </ol>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                </div>
            </div>
        </div>
    </div>
    <br>
    <center><h2 class="nm-divider-title medium">Shop Cat</h2></center>
    <br>
    <div class="nm-divider separator_align_center col-12 ">
        <form class="form-inline" action="{{route('pethousecat')}}" method="GET"
              style="font-size: 15px; float: right;">
            <select name="search-price" id="search-price" onchange="changeFunc()">
                <option >Price Search</option>
                <option value="5-10">5$ - 10$</option>
                <option value="10-50">10$ - 50$</option>
                <option value="50-100">50$ - 100$</option>
                <option value="100-300">100$ - 300$</option>
                <option value="300-500">300$ - 500$</option>
            </select>
            <input type="hidden" name="paged" value="1">
        </form>
        <br>
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
    <div class="row">
        <div class="links" style="margin-left: 470px">
            {{$product->links()}}</div>
    </div>
@endsection
@section('extra-js')
    <script>
        function changeFunc() {
            var selectBox = document.getElementById("search-price");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            var price = selectedValue.split('-');
            $.ajax({
                'url':'/search-price/cat'+'?min='+price[0]+'&max='+price[1],
                'method':'GET',
                success: function (res) {
                    console.log(res);
                },
                error: function (e) {
                    console.log(e);
                }
            });
        }
    </script>
    @endsection