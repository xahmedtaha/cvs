<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>CVS | Administration</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('argon/img/brand/favicon.png')}}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('argon/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('argon/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">  <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('argon/css/argon.css?v=1.2.0')}}" type="text/css">

</head>

<body style="background-color:#F69527;">
    <!-- Logo -->
    <div class="container-fluid" style="background-color: white;">
        <div class="row justify-content-center">
            <div class="col-md-1 col-2">
                <a href="#!">
                    <img src="{{asset('argon/img/brand/blue.png')}}" alt="CVS-LOGO" class="img-fluid pt-3">
                </a>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header py-7 py-lg-8 mt-n2" style="background-color:white;">
            <div class="container mt-n5">
                <div class="header-body text-center mb-4">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-default">Welcome</h1>
                            <p class="text-lead text-default">Sign in to start managing CVS</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon style="fill:#F69527;" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            @yield('content')
        </div>
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
