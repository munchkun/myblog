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
                    <h2>News&Contact</h2>

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

            <!-- Contact Information -->
            <div class="col-12 col-md-6">
                <div class="contact-information">
                    <h2>ご意見、ご要望など</h2>
                    <div class="single-info">
                    </div>
                    <div class="single-info">
                        <i class="fa fa-phone"></i>
                        <span>203-808-8613</span>
                    </div>
                    <div class="single-info">
                        <i class="fa fa-envelope"></i>
                        <span>@gmail.com</span>
                    </div>
                    <div class="contact-social-info">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<!-- ***** Contact Area End ***** -->


@endsection
