@extends('layouts.master')
@section('title')
    Cart Order
@endsection
@section('styles')
    <link rel="stylesheet" href="/css/cursor.css" type="text/css">
    <link rel="stylesheet" href="/css/cart.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
@section('scripts')
    <script src="/js/cart.js" type="text/javascript"/>
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
    <div id="" class="container">
        <section id="petCart">
            @foreach($shopping_cart->items as $item)
                <article class="product">
                    <header>
                        <a class="remove" href="/delete-cart">
                            <img src="{{$item->product->images}}" alt="{{$item->product->name}}">

                            <h3>Remove product</h3>
                        </a>
                    </header>

                    <div class="content">
                        <h1>{{$item->product->name}}</h1>
                        {{$item->product->description}}
                    </div>

                    <footer class="content">
                        <span class="qt-minus">-</span>
                        <span class="qt">{{$item->quantity}}</span>
                        <span class="qt-plus">+</span>

                        <h2 class="full-price">
                            {{$item->getTotalPriceWithFormat()}} ($)
                        </h2>

                        <h2 class="price">
                            {{$item->product->price}} ($)
                        </h2>
                    </footer>
                </article>
            @endforeach
        </section>

        <footer id="site-footer">
            <div class="container clearfix">
                <div class="left">
                    <h1 class="total">Total: <span>{{$shopping_cart->getTotalMoneyWithFormat()}}</span>($)</h1>
                </div>
                <div class="right">
                    <h1 class="build-details">Bill Details</h1>
                    <div class="input-field">
                        <label>Name</label>
                        <input id="register-name" type="text" name="name" placeholder="Your name" required>
                        <p class="label-error"></p>
                    </div>
                    <center><a class="btn">Checkout</a></center>
                </div>
            </div>
        </footer>
    </div>
@endsection