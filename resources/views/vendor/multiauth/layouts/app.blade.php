<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>CVS | Admin Panel</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('argon/img/brand/favicon.png')}}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('argon/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('argon/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">  <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('argon/css/argon.css?v=1.2.0')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('argon/css/custom/main.css')}}" type="text/css">
</head>

<body>

@include('vendor.multiauth.layouts.partials.sidebar')
<!-- Main content -->
<div class="main-content" id="panel" style="max-width: 100vw; overflow-x: hidden">
    @include('vendor.multiauth.layouts.partials.navbar')
    <div class="header pb-6 cus-bg">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">

                </div>
                @yield('header')
            </div>
        </div>
    </div>
    <div class="mt--6">
        @yield('content')
    </div>
    @include('vendor.multiauth.layouts.partials.footer')
</div>



<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('argon/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('argon/vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<!-- Optional JS -->
{{--<script src="{{asset('argon/vendor/chart.js/dist/Chart.min.js')}}"></script>--}}
{{--<script src="{{asset('argon/vendor/chart.js/dist/Chart.extension.js')}}"></script>--}}
<!-- Argon JS -->
<script src="{{asset('argon/js/argon.js?v=1.2.0')}}"></script>
</body>
