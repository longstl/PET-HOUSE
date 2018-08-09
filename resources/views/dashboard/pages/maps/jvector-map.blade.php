@extends('dashboard.layouts.master')

@section('title')
    JVector Map
@endsection

@section('extra-css')
    <link rel="stylesheet" href="/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                JVECTORMAP
                <small>Taken from <a href="http://jvectormap.com/" target="_blank">jvectormap.com</a></small>
            </h2>
        </div>
        <!-- Example -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            EXAMPLE
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="world-map-markers" class="jvector-map"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Example -->
    </div>
@endsection

@section('extra-script')
    <script src="https://maps.google.com/maps/api/js?v=3&sensor=false&key=AIzaSyDB8bmtghEUCGDxEhdLbaTOG9yAENpyHaM"></script>
    <script src="/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="/assets/js/pages/maps/jvectormap.js"></script>
@endsection
