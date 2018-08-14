<link rel="stylesheet" href="/css/header.css" type="text/css">
<link rel="stylesheet" href="/css/cursor.css" type="text/css">
<link rel="stylesheet" href="/css/login-register.css" type="text/css">
<nav class="navbar navbar-expand-lg fixed-top font-weight-bold" id="mainNav" style="height: 70px;">
    <div class="container"><a class="navbar-brand" href="#page-top"><a
                    class="nav-link text-uppercase pb_letter-spacing-2" href="/">
                <img src="images/logo/logo.png"
                     alt="PET HOUSE Logo" class="light"
                     style="width: 85px; height: 85px;">
            </a></a>
        <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive"
                type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto text-uppercase">
                <li class="nav-item" role="presentation"><a style="color: black" class="nav-link js-scroll-trigger" href="/">HOME</a></li>
                <li class="nav-item dropdown text-uppercase pb_letter-spacing-2">
                    <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Adopt a Pet
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a style="color: black" class="dropdown-item" href="pethousedog">Dog</a></li>
                        <li><a style="color: black" class="dropdown-item" href="pethousecat">Cat</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown text-uppercase pb_letter-spacing-2">
                    <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Shop Accessories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a style="color: black" class="dropdown-item" href="accessoriesdog">Dog</a></li>
                        <li><a style="color: black" class="dropdown-item" href="accessoriescat">Cat</a></li>

                    </ul>
                </li>
                <li class="nav-item" role="presentation"><a style="color: black" class="nav-link js-scroll-trigger" href="spa">PET SPA</a></li>
                <li class="nav-item" role="presentation"><a style="color: black" class="nav-link js-scroll-trigger" href="contact">CONTACT</a></li>
                <li class="nav-item" role="presentation"><a style="color: black" class="nav-link js-scroll-trigger" href="about">ABOUT</a></li>
            </ul>
        </div>
    </div>
    <nav class="nav navbar-nav navbar-right navbar-expand-lg navbar-default navbar-fixed-top">
        <button type="button" onclick="window.location.href='/cart'" class="btn btn-info" id="cart" data-toggle="modal" data-target="#cart_Modal"
                style="color: black; background: none; border: none"><i
                    class="fas fa-cart-arrow-down"></i>
        </button>
        <button type="button" onclick="showLogin()" class="btn btn-info" data-toggle="modal" data-target="#user_Modal"
                style="color: black; background: none; border: none;"><i
                    class="fas fa-users"></i>
        </button>
        <div id="login" class="modal" style="width: 100%;">
            <div class="login-form">
                <form action="#" method="post">
                    <h2 class="text-center">SIGN IN</h2>
                    <div class="form-group">
                        <div class="input-group">

                            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">

                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                    </div>
                    <div class="clearfix">
                        <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                        <a href="#" class="pull-right">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary login-btn btn-block">SIGN IN <i class="fas fa-sign-in-alt"></i></button>
                    </div>

                    <div class="or-seperator"><i>OR</i></div>
                    <p class="text-center">Login with your social media account</p>
                    <div class="text-center social-btn">
                        <a href="#" class="btn btn-primary"><i class="fab fa-facebook fa-2x"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-danger"><i class="fab fa-google-plus fa-2x"></i>&nbsp; Google</a>
                    </div>
                    <br><br> <p class="text-center text-muted small">Don't have an account? <a href="#" onclick="showRegister()">Sign up here! <i class="fas fa-user-plus"></i></a></p>
                </form>
            </div>
        </div>
        <div class="modal" id="register">
            <div class="login-form">
                <form action="#" method="post">
                    <h2 class="text-center">SIGN UP </h2>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" class="form-control" name="username" placeholder="Email" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="confirm_password" name="password" placeholder="confirm Password" required="required">
                        </div>
                    </div>
                    <div class="form-group label_001" >
                        <label class=""> Gender: </label>
                        <label class="radio-inline"><input type="radio" name="optradio">Male</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Other</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary login-btn btn-block">SIGN UP <i class="fas fa-user-plus"></i></button>
                    </div>
                    <div class="or-seperator"><i></i></div>
                    <br><p class="text-center text-muted small">Already have an account? <a href="#" onclick="showLogin()">Sign in here! <i class="fas fa-sign-in-alt"></i></a></p>
                </form>
            </div>
        </div>
        </div>
    </nav>
</nav>
<script src="js/login-register.js"></script>