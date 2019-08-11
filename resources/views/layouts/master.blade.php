@extends('layouts.app')

@section('content')
    <!-- Wrapper --> 
    <div class="wrapper">

        <!-- Header -->
        @include('layouts.header')

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Content -->
        @yield('contentWrapper')

        <!-- Footer -->
        @include('layouts.footer')

        <!-- Control Sidebar -->
        @include('layouts.controlSidebar')

    </div>
    <!-- ./wrapper -->
@endsection