@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
@endsection
@section('slide-show')
    @include('partials.slideshow')
@endsection
@section('content')
    <link rel="stylesheet" href="/css/contact.css" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <div class="row" id="contatti">
        <div class="container mt-5" >

            <div class="row" style="height:550px;">
                <div class="col-md-6 maps" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.095307416727!2d105.77955771450473!3d21.028872185998285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3260b1a8b%3A0x862052392e3f478e!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSAxMDAwMCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1533806331027" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <h2 class="text-uppercase mt-3 font-weight-bold text">CONTACT</h2>
                    <form action="/contact-us" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="firstName" class="form-control mt-2" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="lastName" class="form-control mt-2" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control mt-2" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control mt-2" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Message" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-light" type="submit">Send Mail <i class="fas fa-location-arrow"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="text">
                        <h2 class="text-uppercase mt-4 font-weight-bold">Pet House</h2>

                        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+84) 123456</a><br>
                        <i class="fa fa-envelope mt-3"></i> <a href="">name@gmail.com</a><br>
                        <i class="fas fa-globe mt-3"></i><a>MỸ Đình - Nam Từ Liêm Hà Nội</a> <br>
                        <div class="my-4">
                            <a href=""><i style="color: #007bff" class="fab fa-facebook fa-3x pr-4"></i></a>
                            <a href=""><i style="color: #df4930" class="fab fa-google-plus fa-3x"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row text-center text" id="author">
        <div class="col-12 mt-4 h3 ">
            <a href="#">PET HOUSE</a>
        </div>

    </div>
@endsection