<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Icard - Personal Portfolio </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- plugin -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            @include('layouts.alerts')
        </div>
    </div>
</div>

<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>
</div>
<!-- preloader area end -->
<!-- Menu toggle Icon Start -->
<div class="toggle-icon">
    <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- Menu toggle Icon End -->
<!-- Main Website wrapper start -->
<div id="main">

    <!--Main-Menu Area Start-->
    <div class="mainmenu-area">
        <nav class="my-navbar">
            <ul class="navbar-links">
                <li class="mynav-item active">
                    <a class="mynav-link active" href="#home">Home</a>
                </li>
                <li class="mynav-item">
                    <a class="mynav-link" href="#about">About</a>
                </li>
                <li class="mynav-item">
                    <a class="mynav-link" href="#resume">Resume</a>
                </li>
                <li class="mynav-item portfolio">
                    <a class="mynav-link portfolio" href="#portfolio">Portfolio</a>
                </li>
                <li class="mynav-item">
                    <a class="mynav-link" href="#blog">Blog</a>
                </li>
                <li class="mynav-item">
                    <a class="mynav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
    <!--Main-Menu Area Start-->

    @yield('content')
</div>
<!-- Main Website wrapper End -->

<!-- Blog Modal Start-->
<div class="modal fade" id="blogmodal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="blog-details">
                    <div class="blog-content">
                        <div class="feature-image">
                            <img src="" class="img-fluid post-image" alt="">
                        </div>
                        <div class="content">
                            <h3 class="post-title"></h3>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-user-tie"></i>
                                        <span class="post-author"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-calendar-alt"></i>
                                        <span class="post-date"></span>
                                    </a>
                                </li>

                            </ul>
                            <p class="post-content"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Blog Modal End-->

<!-- Main jquery and all jquery plugin hear -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/circel.js') }}"></script>
<script src="{{ asset('assets/js/typed.min.js') }}"></script>
<script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
