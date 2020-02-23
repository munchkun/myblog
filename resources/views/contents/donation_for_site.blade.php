@extends('template')

@section('title','blog')

@section('description','性科学を扱ったコラム')

@include('head')

@include('header')

@include('footer')

@section('content')

    <style type="text/css">
        #payjp_checkout_box input[type=button]
        {
            -webkit-appearance:none;
            border-radius:2px;display:inline-block;padding:.5em 1em;font-size:12px;
            text-align:center;
            white-space:nowrap;vertical-align:middle;
            cursor:pointer;border:1px solid #2FA0DC;
            color:#fff;background-color:#198fcc;background-image:-webkit-linear-gradient(#35a9e6 0,#319cd3 48%,#2590c7 100%);
            background-image:-moz-linear-gradient(#35a9e6 0,#319cd3 48%,#2590c7 100%);
            background-image:-o-linear-gradient(#35a9e6 0,#319cd3 48%,#2590c7 100%);
            background-image:linear-gradient(#35a9e6 0,#319cd3 48%,#2590c7 100%)}#payjp_checkout_box input[type=button].has-token{border:1px solid #1C9A1C;
                                                                                     background-color:#469C46;background-image:none
                                                                                 }
    </style>



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
      <div class="row justify-content-center">
          <div class="col-md-8">
        <div class="card">
      <div class="card-header" style="background-color:#ff4c8b;
                                     color: rgba(255, 255 ,255,1);
                                     font-weight: 900;">寄付</div>
        <div class="row">
            <div class="col-sm-6">
              <div class="card-body">
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
                <script class="payjp-button"
                        src="https://checkout.pay.jp/"
                        data-key="pk_test_c939abade1e616e06069596c"
                        data-text="寄付"
                >


                </script>
              </form>
            </div>
            </div>
              </div>
            </div>
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
</section>

@endsection
