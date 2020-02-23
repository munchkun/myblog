@extends('template')

@section('title','blog')

@section('description','性科学を扱ったコラム')

@include('head')

@include('header')

@include('footer')

@section('content')
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
                    <h2>Donation Menu</h2>
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
                    <h2>Donation Menu</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
              <div class="card" style="width: 20rem;">

              <div class="card-body">
                <h5 class="card-title">Donation for Site</h5>
                <p class="card-text"></p>
                <div class="mx-auto" style="width: 200px;">
                  <div class="aboutUs-btn">
                      <a class="text-center" href="/donation/for_site">寄付する</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title">Donation for your Project</h5>
              <p class="card-text"></p>
              <div class="mx-auto" style="width: 200px;">
                <div class="aboutUs-btn">
                    <a class="text-center" href="/blog/mugi">プロジェクトを見る</a>
                </div>
              </div>

            </div>
          </div>
        </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</section>

@endsection
