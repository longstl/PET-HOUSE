<!doctype html>
<html lang="en">
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}"/>
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>{{ $page_title }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet"/>
    <meta name="_token" content="{{ csrf_token() }}">
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    @yield('styles')
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-active-color="rose" data-background-color="black"
         data-image="{{asset('assets/img/sidebar-1.jpg')}}">
        <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
        <div class="logo">
            <a href="/dashboard" class="simple-text">
                PET HOUSE
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="/dashboard" class="simple-text">
                Ct
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{asset('assets/img/faces/avatar.jpg')}}"/>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        {{Auth::user()->name}}
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#">Settings</a>
                            </li>
                            <li>
                                {{--<a href="#">LogOut</a>--}}

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
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="{{ $current_menu == 'dashboard' ? 'active' : '' }}">
                    <a href="/dashboard">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="{{ $current_menu == 'category_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">apps</i>
                        <p>Category
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'category_manager')
                        <div class="collapse in" id="componentsExamples">
                            <ul class="nav">
                                @if($current_menu == 'category_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Edit Category</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/dashboard/category/create">Add Category </a>
                                </li>
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/category">List Category</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="componentsExamples">
                            <ul class="nav">
                                @if($current_menu == 'category_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Edit Category</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/dashboard/category/create">Add Category</a>
                                </li>
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/category">List category</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>
                <li class="{{ $current_menu == 'product_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#pagesExamples">
                        <i class="material-icons">apps</i>
                        <p>Product
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'product_manager')
                        <div class="collapse in" id="pagesExamples">
                            <ul class="nav">
                                @if($current_menu == 'product_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Edit Category</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'product_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/dashboard/product/create">Add Product </a>
                                </li>
                                <li class="{{ ($current_menu == 'product_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/product">List Product</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                @if($current_menu == 'product_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Edit Category</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'product_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/dashboard/product/create">Add Product</a>
                                </li>
                                <li class="{{ ($current_menu == 'product_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/product">List Product</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>
                <li class="{{ $current_menu == 'article_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#formsExamples">
                        <i class="material-icons">apps</i>
                        <p>Article
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'article_manager')
                        <div class="collapse in" id="formsExamples">
                            <ul class="nav">
                                @if($current_menu == 'article_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Edit Category</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'article_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/dashboard/article/create">Add Article </a>
                                </li>
                                <li class="{{ ($current_menu == 'article_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/article">List Article</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                                @if($current_menu == 'article_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Edit Category</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'article_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/dashboard/article/create">Add Article</a>
                                </li>
                                <li class="{{ ($current_menu == 'article_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/article">List Article</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>
                <li class="{{ $current_menu == 'order_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#tablesExamples">
                        <i class="material-icons">apps</i>
                        <p>Order
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'order_manager')
                        <div class="collapse in" id="tablesExamples">
                            <ul class="nav">
                                <li class="{{ ($current_menu == 'order_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/order">List Order</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                <li class="{{ ($current_menu == 'order_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/order">List Order</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>

                <li class="{{ $current_menu == 'spa_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#spaExamples">
                        <i class="material-icons">apps</i>
                        <p>Spa
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'spa_manager')
                        <div class="collapse in" id="spaExamples">
                            <ul class="nav">
                                <li class="{{ ($current_menu == 'spa_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/spa">List Spa</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="spaExamples">
                            <ul class="nav">
                                <li class="{{ ($current_menu == 'spa_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/spa">List Spa</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>

                <li class="{{ $current_menu == 'contact_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#contactExamples">
                        <i class="material-icons">apps</i>
                        <p>Contact
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'contact_manager')
                        <div class="collapse in" id="contactExamples">
                            <ul class="nav">
                                <li class="{{ ($current_menu == 'contact_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/contact">List Contact</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="contactExamples">
                            <ul class="nav">
                                <li class="{{ ($current_menu == 'contact_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/contact">List Contact</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>

                <li class="{{ $current_menu == 'user_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#mapsExamples">
                        <i class="material-icons">apps</i>
                        <p>User
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'user_manager')
                        <div class="collapse in" id="mapsExamples">
                            <ul class="nav">
                                @if($current_menu == 'user_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Edit User</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'user_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/dashboard/user/create">Add User </a>
                                </li>
                                <li class="{{ ($current_menu == 'user_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/user">List User</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">
                                @if($current_menu == 'user_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Edit User</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'user_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/dashboard/user/create">Add User</a>
                                </li>
                                <li class="{{ ($current_menu == 'user_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/dashboard/user">List User</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>
                {{--#mapsExamples--}}
                <li class="{{ $current_menu == 'chart_manager' ? 'active' : '' }}">
                    <a href="/dashboard/chart">
                        <i class="material-icons">timeline</i>
                        <p>Charts</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Dashboard </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Mike John responded to your email</a>
                                </li>
                                <li>
                                    <a href="#">You have 5 new tasks</a>
                                </li>
                                <li>
                                    <a href="#">You're now friend with Andrew</a>
                                </li>
                                <li>
                                    <a href="#">Another Notification</a>
                                </li>
                                <li>
                                    <a href="#">Another One</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group form-search is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        {{-- Section content --}}
        <div class="content">
            @yield('content')
        </div>
        {{-- End section --}}
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="http://127.0.0.1:8000/">PET HOUSE</a>, made with love for a better web
                </p>
            </div>
        </footer>
    </div>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-purple" data-color="purple"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-rose active" data-color="rose"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="text-center">
                        <span class="badge filter badge-white" data-color="white"></span>
                        <span class="badge filter badge-black active" data-color="black"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <div class="togglebutton switch-sidebar-mini">
                        <label>
                            <input type="checkbox" unchecked="">
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Image</p>
                    <div class="togglebutton switch-sidebar-image">
                        <label>
                            <input type="checkbox" checked="">
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Images</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{asset('assets/img/sidebar-1.jpg')}}" alt=""/>
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{asset('assets/img/sidebar-2.jpg')}}" alt=""/>
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{asset('assets/img/sidebar-3.jpg')}}" alt=""/>
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{asset('assets/img/sidebar-4.jpg')}}" alt=""/>
                </a>
            </li>
        </ul>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('assets/js/moment.min.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{asset('assets/js/chartist.min.js')}}"></script>
<!--  Plugin for the Wizard -->
<script src="{{asset('assets/js/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>
<!--   Sharrre Library    -->
<script src="{{asset('assets/js/jquery.sharrre.js')}}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{asset('assets/js/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin -->
<script src="{{asset('assets/js/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin -->
<script src="{{asset('assets/js/nouislider.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="{{asset('assets/js/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{asset('assets/js/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{asset('assets/js/sweetalert2.js')}}"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('assets/js/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
<!-- TagsInput Plugin -->
<script src="{{asset('assets/js/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('assets/js/material-dashboard.js')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
        demo.initVectorMap();
    });</script>
<script src="{{asset('js/quen.js')}}"></script>
<script src="{{asset('js/product.js')}}"></script>
<script src="{{asset('js/article.js')}}"></script>
<script src="{{asset('js/order.js')}}"></script>
<script src="{{asset('js/spa.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
@yield('scripts')
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>