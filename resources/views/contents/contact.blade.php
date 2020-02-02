@extends('template')

@section('title','研究者ブログ')

@section('description','性についての研究者のブログです。')

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
                    <h2>Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Contact Area Start ***** -->
<section class="contact-area section_padding_100">
    <div class="container">
        <div class="row">
            <!-- Contact Form Area -->
            <div class="col-12 col-md-6">
                <div class="contact-form-area">
                    <h2>Contact form</h2>
                    <form action="#">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="E-mail">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit">send</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Contact Information -->
            <div class="col-12 col-md-6">
                <div class="contact-information">
                    <h2>Give us a shout</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="single-info">
                        <i class="fa fa-map"></i>
                        <span>4127 Raoul Wallenber4127 Raoul Wallen <br>berg Place</span>
                    </div>
                    <div class="single-info">
                        <i class="fa fa-phone"></i>
                        <span>203-808-8613</span>
                    </div>
                    <div class="single-info">
                        <i class="fa fa-envelope"></i>
                        <span>Milothemes@gmail.com</span>
                    </div>
                    <div class="contact-social-info">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Area End ***** -->

<!-- Google Maps -->
<div class="map-area">
    <div id="googleMap"></div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="js/map-active.js"></script>
@endsection
