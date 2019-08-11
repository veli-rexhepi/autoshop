@extends('layouts.app')

@section('content')    
    
        <!-- Header -->
        @include('layouts.headerGuest')

        <!-- Main Content -->
        @yield('contentWrapper-Guest')    

        <!-- Footer -->
        @include('layouts.footerGuest')
    
@endsection