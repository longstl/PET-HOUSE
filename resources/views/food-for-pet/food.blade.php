@extends('layouts.master')
@section('title')
@endsection
@section('styles')
    <link rel="stylesheet" href="/css/accessories-product.css" type="text/css">
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

    <link rel="stylesheet" href="/css/accessories-product.css" type="text/css">    <br>
    <div class="bread-bar bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/foodpet">Food For Pet</a></li>
                    </ol>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                </div>
            </div>
        </div>
    </div>
    <br>
    <center><h2 class="nm-divider-title medium">Food</h2></center>
    <br>
    <div class="nm-divider separator_align_center col-12 ">
        <form class="form-inline" action="{{route('foodpet')}}" method="GET"
              style="font-size: 15px; float: right;">
            <select name="search-price-food" id="search-price-food" onchange="changeFuncfood()">
                <option value="0-9999999999">All</option>
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
        <div class="row" id="resultsearch">
            @foreach($product as $key => $exp)
                <div class="col-sm-3">
                    <div class="item-image-wrapper">
                        <div class="single-items">
                            <div class="iteminfo text-xs-center">
                                <a href="{{route('detailfood',$exp->id)}}"><img src="{{$exp->images}} " style="height: 250px;" alt=""></a>
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
        <div class="links" style="margin-left: 470px" id="pagination">
            {{$product->appends(request()->input())->links()}}</div>
    </div>
@endsection
@section('extra-js')
    <script>
        document.onload = function () {

        };

        // tao ra 1 phan trang
        function generatePaginate(res, price) {
            // neu do dai cua json tra ve = 0 thi se cho paginate = null ( tuc ko co gi )
            if(res.data.length == 0){
                return '';
            }
            // con lai neu co gia tri thi se cho render = chuoi html kia
            var paginateItem = '';

            paginateItem += `
        <li class="page-item ${res.current_page === 1 ? 'disabled' : ''}" aria-disabled="true" aria-label="« Previous">
            <span class="page-link" aria-hidden="true">‹</span>
        </li>
    `;
            for (var i = 1; i <= Math.ceil(res.total / res.per_page); i++) {
                paginateItem += `
            <li class="page-item ${res.current_page === i ? 'active' : ''}">
                <a href="/pethousefood?page=${i}&min=${price[0]}&max=${price[1]}" class="page-link">${i}</a>
            </li>
        `;
            }

            paginateItem += `
        <li class="page-item ${res.current_page === res.last_page ? 'disabled' : ''}" aria-disabled="true" aria-label="« Previous">
            <span class="page-link" aria-hidden="true">›</span>
        </li>
    `;

            var paginateBlock = `<ul class="pagination" role="navigation">${paginateItem}</ul>`;
            return paginateBlock;
        }

        function generateBlockRsSearch(id, title, img, price) {

            var output = ``;
            output += '<div class="col-sm-3">';
            output += '<div class="item-image-wrapper">';
            output += '<div class="single-items">';
            output += '<div class="iteminfo text-xs-center">';
            output += '<a href="/detailfood/' + id + '"><img src="' + img + '" style="height: 250px;" alt=""></a>';
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

        function changeFuncfood() {
            var selectBox = document.getElementById("search-price-food");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            var price = selectedValue.split('-');
            $.ajax({
                'url': '/search-price/food' + '?min=' + price[0] + '&max=' + price[1],
                'method': 'GET',
                success: function (res) {
                    console.log(res);
                    document.getElementById('resultsearch').innerHTML = "";
                    if (res.data.length === 0) {
                        document.getElementById('resultsearch').innerHTML += generateBlockNullSearch();
                        document.getElementById('pagination').innerHTML = generatePaginate(res, price);
                    } else {
                        // khi o dung pagination thi no sẽ tra ve 1 obj chu ko phai 1 arr.
                        var arr = res.data;
                        for (i in arr) {
                            document.getElementById('resultsearch').innerHTML += generateBlockRsSearch(arr[i].id, arr[i].title, arr[i].images, arr[i].price);
                        }
                        document.getElementById('pagination').innerHTML = generatePaginate(res, price);
                    }
                },
                error: function (e) {
                    console.log(e);
                }
            });
        }
    </script>
@endsection
