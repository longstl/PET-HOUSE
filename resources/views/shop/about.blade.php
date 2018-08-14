@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
@endsection
@section('slide-show')
    @include('partials.slideshow')
@endsection
@section('content')
    <link rel="stylesheet" href="/css/about.css" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <div class="author-green">
        <div class="info">
            <img src="images/logo/logo.png" class="profile" />
            <h2 class="name">PET HOUSE</h2>
        </div>
        <div class="about">
            <p class="bio">
                Pet House guarantees that the service we provide you is reputable,
                if any mistakes or dissatisfaction during the transaction, Pet House
                is ready to receive all your suggestions.
                Please contact Pet House for the product and please!
            </p>
        </div>
    </div><br><br>
    <section class="container">
        <div class="row active-with-click">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <article class="material-card Red">
                    <h2>
                        <span>1. Trịnh Thị Thảo.</span>
                        <strong>
                            <i class="fa fa-fw fa-star"></i>
                            Nhóm trưởng.
                        </strong>
                    </h2>
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="img-responsive" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.15752-9/39074191_408600426335864_8482292906151903232_n.jpg?_nc_cat=0&oh=78957c4dfb651e65716b6a711b1446af&oe=5BF91666">
                        </div>
                        <div class="mc-description">
                           <p>-Họ tên: Trịnh Thị Thảo.</p>
                            <p>-SĐT: 0123456789</p>
                            <p>-Quê quán: Sầm Sơn - Thanh Hóa.</p>
                        </div>
                    </div>
                    <a class="mc-btn-action">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="mc-footer">
                        <h4>
                            TEAM
                        </h4>
                        <center>
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-google-plus"></a>
                        </center>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <article class="material-card Red">
                    <h2>
                        <span>2. Hà Văn Thường.</span>
                        <strong>
                            <i class="fa fa-fw fa-star"></i>
                            Thành viên.
                        </strong>
                    </h2>
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="img-responsive"  src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.15752-9/39059185_314143292480547_2506499882668261376_n.jpg?_nc_cat=0&oh=784d7c2d2db22a455f8a1181d25d0e35&oe=5C081EF1">
                        </div>
                        <div class="mc-description">
                            <p>Họ tên: Hà Văn Thường.</p>
                            <p>SĐT: 0123456789</p>
                            <p>Quê quán: Như Thanh - Thanh Hóa.</p>
                        </div>
                    </div>
                    <a class="mc-btn-action">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="mc-footer">
                        <h4>
                            TEAM
                        </h4>
                        <center>
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-google-plus"></a>
                        </center>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <article class="material-card Red">
                    <h2>
                        <span>3. Trần Ngọc Khánh.</span>
                        <strong>
                            <i class="fa fa-fw fa-star"></i>
                            Thành viên.
                        </strong>
                    </h2>
                    <div class="mc-content">
                        <div class="img-container">
                            <img class="img-responsive" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.15752-9/39017331_743228579350083_7690663925930524672_n.jpg?_nc_cat=0&oh=b35978054f59e530e4f7dc77a29ec84e&oe=5C0A3E35">
                        </div>
                        <div class="mc-description">
                            <p>Họ tên: Trần Ngọc Khánh.</p>
                            <p>SĐT: 0123456789</p>
                            <p>Quê quán: Quất Lâm - Nam Định.</p>
                        </div>
                    </div>
                    <a class="mc-btn-action">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="mc-footer">
                        <h4>
                            TEAM
                        </h4>
                        <center>
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-google-plus"></a>
                        </center>
                    </div>
                </article>
            </div>
        </div>


    </section>
    <script src="js/about.js"></script>
@endsection