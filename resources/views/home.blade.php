@extends('layouts.master')
@section('slide-show')
    @include('partials.slideshow')
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success">
                        @if(Auth::user()->admin == 0)
                            <p>You'are logged in as USERS</p>
                            @else
                            <p>You'are logged in as ADMIN</p>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
