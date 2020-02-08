@extends('template')

@section('title','Donations')

@section('description','研究への寄付')

@include('head')

@include('header')

@include('footer')

@section('content')
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="selene-breadcumb-area">
        <!-- Shape -->
        <div class="welcome-bg-shape">
            <img class="welcome-first-shape" src="{{asset('img/core-img/welcome-bg-1.png')}}" alt="">
            <img class="welcome-second-shape" src="{{asset('img/core-img/welcome-bg-2.png')}}" alt="">
        </div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent text-right">
                        <h2>Donations</h2>



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
                <div class="col-12 col-md">
                    <h1>Thanks Your Donation</h1>

                <p>寄付してくださいまして誠にありがとうございます。来月に今月の集金結果を報告し、
                  その寄付金が何に使用されたのかNewsで報告させていただきます。</p>
                </div>
                
            </div>
        </div>

    </section>
    <!-- ***** About Us Area End ***** -->


@endsection
