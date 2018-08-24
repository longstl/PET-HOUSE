@extends('layouts.master')
@section('title')
@section('styles')
    <link rel="stylesheet" href="/css/pet-spa.css" type="text/css">
@endsection
@endsection
@section('content')

    <br>


    <div class="container">
        <br><br>
        <br>
        <p class="text-center">Your pet can you need to be beautiful! Please make it to make your make up for the pets for the perfect.</p>
        <br>
        <hr>
        <div class="row">
            <aside class="col-md-6">
                <!-- ================== 1-carousel bootstrap  ==================  -->
                <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                        <li data-target="#carousel1_indicator" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                 src="images/spa/spa1.jpg" alt="First slide">
                            <article class="carousel-caption d-none d-md-block">
                                <p>Fine Beauty.</p>
                            </article>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                 src="images/spa/spa2.jpg" alt="Second slide">
                            <article class="carousel-caption d-none d-md-block">
                                <p>Cut & Shower.</p>
                            </article>

                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                 src="images/spa/spa3.jpg" alt="Third slide">
                            <article class="carousel-caption d-none d-md-block">
                                <p> Set Prestige to the top.</p>
                            </article>

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- ==================  1-carousel bootstrap ==================  .// -->
            </aside> <!-- col.// -->
            <aside class="col-md-6">
                <!-- 2-carousel bootstrap -->
                <div id="carousel2_indicator" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                 src="images/spa/spa4.jpg" alt="First slide">
                            <article class="carousel-caption d-none d-md-block">
                                <p>High level of care.</p>
                            </article> <!-- carousel-caption .// -->
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                 src="images/spa/spa5.jpg" alt="Second slide">
                            <article class="carousel-caption d-none d-md-block">
                                <p>Handsome Employee.</p>
                            </article> <!-- carousel-caption .// -->
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                 src="images/spa/spa6.jpg" alt="Third slide">
                            <article class="carousel-caption d-none d-md-block">
                                <p>We Will Care Well For Your Pet.</p>
                            </article> <!-- carousel-caption .// -->
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel2_indicator" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel2_indicator" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- ==================  2-carousel bootstrap.// ==================  -->
            </aside>
        </div>
    </div>
    </article>

    <div class="container" id="contact-spa">
        <form id="contact" action="/petspa" method="post">
            {{csrf_field()}}
            <h3>Schedule Calendars Now</h3>
            <h4>Let Us Know Information!</h4>
            <fieldset>
                <input id="party" type="datetime-local" name="partydate" value="{{Carbon\Carbon::now(new DateTimeZone('Asia/Ho_Chi_Minh'))->format('Y-m-d')."T".Carbon\Carbon::now(new DateTimeZone('Asia/Ho_Chi_Minh'))->format('H:i:s')}}"/>
            </fieldset>
            <br>
            <fieldset>
                <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <br>
            <fieldset>
                <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
            </fieldset>
            <br>
            <fieldset>
                <input placeholder="Your Phone Number" name="phone" type="tel" tabindex="3" required>
            </fieldset>
            <br>
            <fieldset>
                <textarea name="message" placeholder="Type your Message Here...." tabindex="5" required></textarea>
            </fieldset>
            <br>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Book Pet Spa</button>
            </fieldset>
        </form>


    </div>
@endsection
