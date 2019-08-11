@extends('layouts.home')

@section('home')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            {{ config('app.name', 'Laravel') }}
        </div>

        <div class="links">
            Find your favorite vehicle, compare it with other offers, get in touch with the seller and own it .. Good luck!
        </div>
    </div>
</div>
@endsection