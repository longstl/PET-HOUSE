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
    <br>
    <div class="bread-bar bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/pethousedog">Adopt A Pet / Dog</a></li>
                    </ol>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                </div>
            </div>
        </div>
    </div>
    <center><h2 class="nm-divider-title medium">Shop Dog</h2></center>
    <br>
    <div class="nm-divider separator_align_center col-12 ">
        <form class="form-inline" action="{{route('pethousedog')}}" method="GET"
              style="font-size: 15px; float: right;">
            <select name="search-price-dog" id="search-price-dog" onchange="changeFuncDog()">
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
                                <a href="{{route('detaildog',$exp->id)}}"><img src="{{$exp->images}} "
                                                                               style="height: 250px;" alt=""></a>
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
        {{-- đây là hàm tạo ra HTML sau khi mình ấn vào filter ( tức cái search theo giá )--}}
        function generateBlockRsSearch(id, title, img, price) {
            var output = "";
            output += '<div class="col-sm-3">';
            output += '<div class="item-image-wrapper">';
            output += '<div class="single-items">';
            output += '<div class="iteminfo text-xs-center">';
            output += '<a href="/detailcat/' + id + '"><img src="' + img + '" style="height: 250px;" alt=""></a>';
            output += '<p style="height: 70px;">' + title + '</p>';
            output += '<h2>' + price + '</h2>';
            output += '<center><a href="/add-to-cart?id=' + id + '&quantity=1" class="btn btn-secondary add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></center>';
            output += '</div>';
            output += '</div>';
            output += '</div>';
            output += '</div>';
            return output;
        }

        function generateBlockNullSearch() {
            var output = "";
            output += '<h5>Do not found product.</h5>';
            return output;
        }

        function changeFuncDog() {
            var selectBox = document.getElementById("search-price-dog");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            var price = selectedValue.split('-');
            $.ajax({
                'url':'/search-price/dog'+'?min='+price[0]+'&max='+price[1],
                'method':'GET',
                success: function (res) {
                    // console.log(res);
                    // phần này lấy ra giá trị từ controller ( tên là res )
                    var arr = res;
                    // sau đó dùng innerHTML để hiển thị HTML ra
                    document.getElementById('resultsearch').innerHTML = "";
                    // kiểm tra độ dài của mảng res này = 0 hay ko nếu = 0 thì là null sẽ hiển thị khối cái khối generateBlockNullSearch();
                    if (res.length == 0){
                        document.getElementById('resultsearch').innerHTML += generateBlockNullSearch();
                    }else {
                        // nếu ko null thì sẽ hiển thị khối generateBlockRsSearch() với các thuộc tính ID, title, images và price
                        for (i in arr) {
                            document.getElementById('resultsearch').innerHTML += generateBlockRsSearch(arr[i].id, arr[i].title, arr[i].images, arr[i].price);
                        }
                    }
                },
                error: function (e) {
                    console.log(e);
                }
            });
        }
    </script>
@endsection
