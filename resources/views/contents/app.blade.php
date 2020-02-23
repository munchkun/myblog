@extends('template')

@section('title','ムギのアプリ')

@section('description','ムギのアプリ')

@include('head')

@include('header')

@include('footer')

@section('content')

<!-- ***** Breadcumb Area Start ***** -->
<div class="selene-breadcumb-area">
    <!-- Shape -->
    <div class="welcome-bg-shape">
        <img class="welcome-first-shape" src="img/core-img/welcome-bg-1.png" alt="">
        <img class="welcome-second-shape" src="img/core-img/welcome-bg-2.png" alt="">
    </div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent text-right">
                    <h2>Apps</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** About Us Area Start ***** -->
<section class="aboutUs-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="app-features-content">
                    <h2>ムギちゃんの研究所</h2>

                    <div class="row">
                      




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Us Area End ***** -->

<!-- ***** Service Area Start ***** -->
<section class="services-content-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="services-content-mobile-area">
                    <img src="img/bg-img/wel-dev-1.png" alt="">
                    <div class="service-mobile-content">
                        <!-- Single Content -->
                        <div class="singleMobile-content">
                            <p>Creative</p>
                        </div>
                        <!-- Single Content -->
                        <div class="singleMobile-content">
                            <p>Responsive</p>
                        </div>
                        <!-- Single Content -->
                        <div class="singleMobile-content">
                            <p>Modern</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="services-text">
                    <h2>A simple application easy to use</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet.</p>
                    <!-- Progress Bar Content Area -->
                    <div class="services-progress-bar">
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <h6>Creativity</h6>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="70"></span>
                            </div>
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <h6>Usability</h6>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="100"></span>
                            </div>
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <h6>SEO</h6>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="60"></span>
                            </div>
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <h6>Marketing</h6>
                            <div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Service Area End ***** -->


@endsection
