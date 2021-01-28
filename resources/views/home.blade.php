@extends('layouts.layout')

@section('content')
    <!--Hero Area Start-->
    <section id="home" class="home section-bg active">
        <div class="h-100vh d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="main-profile-image">
                            <img src="{{ asset('assets/images/my-image-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6  align-self-center">
                        <div class="hero-box text-left">
                            <span class="greeting">HELLO</span>
                            <h2 class="name">
                                I'm <span>Andrei Biareshchanka</span>
                            </h2>

                            <h4 class="header_title">Full-Stack PHP Developer</h4>
                            <p class="short-info">
                                Full-stack developer with over 5+ years of experience.
                                I studied Computer Science at University and later honed my skills through
                                commercial and
                                freelance experience. My skills include PHP, Laravel, jQuery, database design,
                                JavaScript and MySQL.
                            </p>
                            <a id="g-p-f-h" class="pagelink mybtn mybtn-bg" href="#portfolio"><span><i
                                        class="fas fa-briefcase"></i>Portfolio</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero Area End-->

    <!-- About Area Start -->
    @include('partials.about')
    <!-- About Area End -->

    <!-- Resume Area Start -->
    @include('partials.resume')
    <!-- Resume Area End -->

    <!-- Portfolio Area Start -->
    @include('partials.portfolio')
    <!-- Portfolio Area End -->

    <!-- Blog List  Area Start -->
    @include('partials.blog')
    <!-- Blog List  Area End -->

    <!-- Contact Us Area Start -->
    @include('partials.contact')
    <!-- Contact Us Area End -->
@endsection
