@extends('layouts.master')
@section('content')
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
    @if(Auth::user()->admin == 0)
        <img src="http://theme.hstatic.net/1000131173/1000324615/14/slide2.jpg?v=185">
    @else
        <p>You'are logged in as ADMIN</p>
    @endif
    </div>
@endsection
