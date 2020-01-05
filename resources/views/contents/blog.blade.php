@extends('template')
@section('title','研究者ブログ')
@section('description','性についての研究者のブログです。')
@include('head')
@include('header')
@include('footer')

@section('content')
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
                    <h2>About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">The Team</li>
                        </ol>
                    </nav>
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
            <div class="col-12 col-lg-6">
                <div class="aboutUs-headline">
                    <h2>A team of great developers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-12 col-md">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>

    <!-- Pie Bars Area Start -->
    <div class="our-skills-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-pie-bar" data-percent="75">
                        <canvas class="bar-circle" width="70" height="70"></canvas>
                        <h6>Web Design</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-pie-bar" data-percent="83">
                        <canvas class="bar-circle" width="70" height="70"></canvas>
                        <h6>Management</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-pie-bar" data-percent="25">
                        <canvas class="bar-circle" width="70" height="70"></canvas>
                        <h6>Pacience</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-pie-bar" data-percent="95">
                        <canvas class="bar-circle" width="70" height="70"></canvas>
                        <h6>Creativity</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="aboutUs-btn">
                    <a class="text-center" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Us Area End ***** -->

<!-- ***** Why Chose Us Area Start ***** -->
<section class="whyChoose-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="aboutUs-headline">
                    <h2>Why choose us?</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>

    <div class="team--member-area">
        <div class="container-fluid">
            <div class="row">
                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="single-team-member">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="img/team-img/1.png" alt="">
                            <!-- Overlay -->
                            <div class="team-member-overlay">
                                <a href="#"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <!-- Team Content -->
                        <div class="single-team-content">
                            <h4>Will Smith</h4>
                            <span>Designer</span>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibul. </p>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="single-team-member">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="img/team-img/2.png" alt="">
                            <!-- Overlay -->
                            <div class="team-member-overlay">
                                <a href="#"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <!-- Team Content -->
                        <div class="single-team-content">
                            <h4>Julius Mick</h4>
                            <span>Team Leader</span>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibul. </p>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="single-team-member">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="img/team-img/3.png" alt="">
                            <!-- Overlay -->
                            <div class="team-member-overlay">
                                <a href="#"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <!-- Team Content -->
                        <div class="single-team-content">
                            <h4>Cristinne Paul</h4>
                            <span>Maneger</span>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibul. </p>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="single-team-member">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="img/team-img/4.png" alt="">
                            <!-- Overlay -->
                            <div class="team-member-overlay">
                                <a href="#"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <!-- Team Content -->
                        <div class="single-team-content">
                            <h4>Will Smith</h4>
                            <span>Designer</span>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibul. </p>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="single-team-member">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="img/team-img/5.png" alt="">
                            <!-- Overlay -->
                            <div class="team-member-overlay">
                                <a href="#"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <!-- Team Content -->
                        <div class="single-team-content">
                            <h4>Will Smith</h4>
                            <span>Designer</span>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibul. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
