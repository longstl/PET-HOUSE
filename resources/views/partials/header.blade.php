<link rel="stylesheet" href="/css/header.css" type="text/css">
<link rel="stylesheet" href="/css/cursor.css" type="text/css">
<link rel="stylesheet" href="/css/login-register.css" type="text/css">
<nav class="navbar navbar-expand-lg fixed-top font-weight-bold" id="mainNav" style="height: 70px;">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><a
                    class="nav-link text-uppercase pb_letter-spacing-2" href="/">
                <img src="images/logo/logo.png"
                     alt="PET HOUSE Logo" class="light"
                     style="width: 85px; height: 85px;">
            </a>
        </a>
        <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive"
                type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto text-uppercase">
                <li class="nav-item" role="presentation"><a style="color: black" class="nav-link js-scroll-trigger"
                                                            href="/">HOME</a></li>
                <li class="nav-item dropdown text-uppercase pb_letter-spacing-2">
                    <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Adopt a Pet
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a style="color: black" class="dropdown-item" href="/pethousedog">Dog</a></li>
                        <li><a style="color: black" class="dropdown-item" href="/pethousecat">Cat</a></li>

                    </ul>
                </li>
                <li class="nav-item" role="presentation"><a style="color: black" class="nav-link js-scroll-trigger"
                                                            href="/accessories">SHOP ACCESSORIES</a></li>
                <li class="nav-item" role="presentation"><a style="color: black" class="nav-link js-scroll-trigger"
                                                            href="/foodpet">FOOD FOR PET</a></li>
                <li class="nav-item" role="presentation"><a style="color: black" class="nav-link js-scroll-trigger"
                                                            href="spa">PET SPA</a></li>
                <li class="nav-item" role="presentation"><a style="color: black" class="nav-link js-scroll-trigger"
                                                            href="contact">CONTACT</a></li>
                <li class="nav-item" role="presentation"><a style="color: black" class="nav-link js-scroll-trigger"
                                                            href="about">ABOUT</a></li>
            </ul>
        </div>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav ml-auto text-uppercase">
            <li class="nav-item" role="presentation">
                <button type="button" onclick="window.location.href='/cart'" class="btn btn-info" id="cart" data-toggle="modal"
                        data-target="#cart_Modal"
                        style="color: black; background: none; border: none"><i
                            class="fas fa-cart-arrow-down"></i>
                </button>
            </li>
        </ul>
    </div>
    <nav>
    <div class="collapse navbar-collapse" >
        <ul class="nav navbar-nav ml-auto text-uppercase">
            <li class="nav-item" role="presentation">
                @if(Auth::check())

                    @if(Auth::user()->admin == 1)
                    <button type="button" onclick="window.location.href='{{route('admin')}}'" class="btn btn-info"
                            style="color: black; background: none; border: none"><i
                                class="fas fa-user"></i>
                    </button>
                        @else
                        <button type="button" onclick="window.location.href='/login'" class="btn btn-info"
                                style="color: black; background: none; border: none"><i
                                    class="fas fa-history"></i>
                        </button>
                        @endif
                    @else
                    <button type="button" onclick="window.location.href='/login'" class="btn btn-info"
                            style="color: black; background: none; border: none"><i
                                class="fas fa-user"></i>
                    </button>
                    @endif
            </li>
        </ul>
    </div>
    </nav>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            @if(Auth::check())
            <li class="nav-item dropdown">
                {{--<a class="nav-link dropdown-toggle" href="#" id="myDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--{{ Auth::user()->name }}--}}
                {{--</a>--}}
                <button id="navbarDropdownMenuLink" class="btn btn-info nav-link dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="myDropDown">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            @endif
        </ul>
    </div>
</nav>
