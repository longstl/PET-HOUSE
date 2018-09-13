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
                {{--a sửa phần này vì a muốn có thêm 1 cái tìm kiếm tất cả--}}
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
        {{--phần này a thêm 1 cái ID cho nó là resultsearch--}}
        <div class="row" id="resultsearch">
            @foreach($product as $key => $exp)
                <div class="col-sm-3">
                    <div class="item-image-wrapper">
                        <div class="single-items">
                            <div class="iteminfo text-xs-center">
                                <a href="{{route('detailcat',$exp->id)}}"><img src="{{$exp->images}} "
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
        // tương tự hàm ở trên nhưng cái này dành cho các phần search trả về không có giá trị
        function generateBlockNullSearch() {
            var output = "";
            output += '<h5>Do not found product.</h5>';
            return output;
        }
        //hàm này thì vẫn từ hqua là để bắt chuyển đổi lấy giá trị của filter
        function changeFunc() {
            var selectBox = document.getElementById("search-price");
            // lấy giá trị ở trong phần select
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            // cắt chuỗi ở dấu -
            var price = selectedValue.split('-');
            $.ajax({
                //gọi đến url tìm kiếm theo khoảng giá
                'url':'/search-price/cat'+'?min='+price[0]+'&max='+price[1],
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