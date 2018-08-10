<link rel="stylesheet" href="/css/header.css" type="text/css">
<link rel="stylesheet" href="/css/cursor.css" type="text/css">
<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light bg-dark navbar-default navbar-fixed-top" id="pb-navbar"
     style="height: 50px">
    <div class="container">
        <a class="navbar-brand d-xl-none d-lg-none d-md-block d-sm-block" href="/">
            <img src="images/logo/logo.png" alt="Instant Logo" class="light" style="width: 80px; height: 80px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar"
                aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="probootstrap-navbar">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="/">Home</a></li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="/about">About</a></li>
                <li class="nav-item dropdown text-uppercase pb_letter-spacing-2"
                    style="margin-top: 30px; margin-bottom: 30px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Adopt a Pet
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action1</a></li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com">Google</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu
                                        1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu
                                        2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <li class="nav-item logo-center d-xl-block d-lg-block d-md-none d-sm-none d-none navbar-default navbar-fixed-top">
                    <a class="nav-link text-uppercase pb_letter-spacing-2" href="/">
                        <img src="images/logo/logo.png" alt="Instant Logo" class="light"
                             style="width: 80px; height: 80px;">
                    </a>
                </li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">Shop Accessories</a></li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">Pet Spa</a></li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <nav class="nav navbar-nav navbar-right navbar-expand-lg navbar-default navbar-fixed-top">
        <button type="button" class="btn btn-info btn-dark" data-toggle="modal" data-target="#cart_Modal"
                style="color: #CCCECF"><i
                    class="fas fa-shopping-cart"></i>
        </button>
        <button type="button" onclick="showLogin()" class="btn btn-info btn-dark" data-toggle="modal" data-target="#user_Modal"
                style="color: #CCCECF"><i
                    class="fas fa-users"></i>
        </button>
        <div id="login" class="modal" style="width: 100%;">
            <div class="login-form">
                <form action="#" method="post">
                    <h2 class="text-center">SIGN IN  </h2>
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
<style>
    .navbar-nav li:hover > ul.dropdown-menu {
        display: block;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
    }

    /* rotate caret on hover */
    .dropdown-menu > li > a:hover:after {
        text-decoration: underline;
        transform: rotate(-90deg);
    }

    /* Mask for background, by default is not display */
    #mask {
        display: none;
        background: #000;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 10;
        width: 100%;
        height: 100%;
        opacity: 0.8;
        z-index: 999;
    }

    .login-form {
        width: 385px;
        margin: 30px auto;
    }
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        color: #007bff;
        margin: 0 0 15px;
    }

    .form-control, .login-btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .login-btn {
        font-size: 15px;
        font-weight: bold;
    }
    .social-btn .btn {
        border: none;
        margin: 10px 3px 0;
        opacity: 1;
    }
    .social-btn .btn:hover {
        opacity: 0.9;
    }
    .social-btn .btn-primary {
        background: #507cc0;
    }
    .social-btn .btn-info {
        background: #64ccf1;
    }
    .social-btn .btn-danger {
        background: #df4930;
    }
    .or-seperator {
        margin-top: 20px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #f7f7f7;
        position: relative;
        top: -11px;
        z-index: 1;
    }

</style>
<script>
    // Get the modal
    var login = document.getElementById('login');
    var register = document.getElementById('register');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == login) {
            login.style.display = "none";
        } else if(event.target == register){
            register.style.display = "none";
        }
    }

    function showRegister() {
        document.getElementById("login").style.display = 'none';
        document.getElementById("register").style.display = 'block';

    }

    function showLogin() {
        document.getElementById("login").style.display = 'block';
        document.getElementById("register").style.display = 'none';

    }

    var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Password không trùng khớp.");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>