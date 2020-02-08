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
                    <h2>Donation For Site</h2>
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
                    <h2>Donation For Site</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
              <form method="POST" action="">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">名前</label>
                  <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="田中　太郎">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="mugi@gmai.com">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">寄付金額(Yen)</label>
                  <input type="number" name="donation_money" class="form-control" placeholder="1000">
                </div>
                <script class="payjp-button" src="https://checkout.pay.jp/" data-key="pk_test_c939abade1e616e06069596c"></script>
              </form>
              </div>
            </div>
          </div>

          </div>
        </div>
        </div>
    </div>
</section>

@endsection
