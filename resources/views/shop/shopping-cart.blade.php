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
                        <a class="remove" href="/remove-from-cart?id={{$item->product->id}}">
                            <img src="{{$item->product->images}}" alt="{{$item->product->name}}">

                            <h3>Remove product</h3>
                        </a>
                    </header>

                    <div class="content">
                        <h1>{{$item->product->title}}</h1>
                    </div>

                    <footer class="content">
                        @if($item->product->categoryId == 1 || $item->product->categoryId == 2)
                            <span class="qt-minus" style="pointer-events: none;">-</span>
                            <span class="qt">{{$item->quantity}}</span>
                            <span class="qt-plus" style="pointer-events: none;">+</span>
                            @elseif($item->product->categoryId == 3 || $item->product->categoryId == 4)
                            <span class="qt-minus">-</span>
                            <span class="qt">{{$item->quantity}}</span>
                            <span class="qt-plus">+</span>
                            @endif
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
                    <br>
                    <fieldset>
                        <center><button class="btn" name="submit" type="submit" id="update-cart" data-submit="...Sending" style="width: 115px">Update Cart</button></center>
                    </fieldset>
                    <br>
                    <fieldset>
                        <center><button class="btn" name="submit" type="submit" id="continue-buying" style="width: 115px">Continue Buy</button></center>
                    </fieldset>
                </div>
                <div class="right" style="width: 300px">
                    <h1 class="build-details">Bill Details</h1>
                        <form id="contact" action="/send-cart" method="post">
                            {{csrf_field()}}
                            <br>
                            <fieldset>
                                <input style="width: 300px" placeholder="Your name" name="shipName" type="text" tabindex="1" required="required" autofocus pattern="^[A-Za-z ]{3,15}$" title="Only Character (minimum 5).">
                            </fieldset>
                            <br>
                            <fieldset>
                                <input style="width: 300px" placeholder="Your Phone Number" name="shipPhone" type="tel" tabindex="3" required="required" pattern="[0-9]{10,14}" title="ten or more characters">
                            </fieldset>
                            <br>
                            <fieldset>
                                <input style="width: 300px" placeholder="Your Address" name="shipAddress" type="text" tabindex="4" required="required">
                            </fieldset>
                            <br>
                            <fieldset>
                                <center><button class="btn" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Checkout</button></center>
                            </fieldset>
                        </form>
                </div>
            </div>
        </footer>
    </div>
@endsection