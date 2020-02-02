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
                    <h2>Mugi Columns</h2>
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
                    <h2>Mugi Columns</h2>
                </div>
            </div>
        </div>
        <div class="card-columns">
          @foreach($blogs as $blog)
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$blog->title}}</h5>
              <p class="card-text">{{ str_limit($blog->body, $limit = 150, $end = '...') }}</p>
              <div class="mx-auto" style="width: 200px;">
                <div class="aboutUs-btn">
                    <a class="text-center" href="{{$blog->path()}}">コラムへいく</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>

</section>

@endsection
