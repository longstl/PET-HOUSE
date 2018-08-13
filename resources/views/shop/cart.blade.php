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

        <section id="cart">
            <article class="product">
                <header>
                    <a class="remove">
                        <img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/1.jpg" alt="">

                        <h3>Remove product</h3>
                    </a>
                </header>

                <div class="content">
                    <h1>Lorem ipsum</h1>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad
                    omnis provident laborum dolore in atque.
                </div>

                <footer class="content">
                    <span class="qt-minus">-</span>
                    <span class="qt">2</span>
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        29.98€
                    </h2>

                    <h2 class="price">
                        14.99€
                    </h2>
                </footer>
            </article>

            <article class="product">
                <header>
                    <a class="remove">
                        <img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/3.jpg" alt="">

                        <h3>Remove product</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Lorem ipsum dolor</h1>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad
                    omnis provident laborum dolore in atque.
                </div>

                <footer class="content">

                    <span class="qt-minus">-</span>
                    <span class="qt">1</span>
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        79.99€
                    </h2>

                    <h2 class="price">
                        79.99€
                    </h2>
                </footer>
            </article>

            <article class="product">
                <header>
                    <a class="remove">
                        <img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/5.jpg" alt="">

                        <h3>Remove product</h3>
                    </a>
                </header>

                <div class="content">

                    <h1>Lorem ipsum dolor ipsdu</h1>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad
                    omnis provident laborum dolore in atque.


                </div>

                <footer class="content">

                    <span class="qt-minus">-</span>
                    <span class="qt">3</span>
                    <span class="qt-plus">+</span>

                    <h2 class="full-price">
                        53.99€
                    </h2>

                    <h2 class="price">
                        17.99€
                    </h2>
                </footer>
            </article>

        </section>

    </div>

    <footer id="site-footer">
        <div class="container clearfix">

            <div class="left">
                <h2 class="subtotal">Subtotal: <span>163.96</span>€</h2>
                <h3 class="tax">Taxes (5%): <span>8.2</span>€</h3>
                <h3 class="shipping">Shipping: <span>5.00</span>€</h3>
            </div>

            <div class="right">
                <h1 class="total">Total: <span>177.16</span>€</h1>
                <a class="btn">Checkout</a>
            </div>

        </div>
    </footer>
@endsection