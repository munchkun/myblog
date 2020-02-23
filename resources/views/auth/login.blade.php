@extends('template')

@section('title','研究者ブログ')

@section('description','性についての研究者のブログです。')

@include('head')

@include('header')

@include('footer')

@section('content')

<script type="text/css">


</script>


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
                    <h2>Login</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Contact Area Start ***** -->
<section class="contact-area section_padding_100">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="card">
                          <div class="card-header" style="background-color:#ff4c8b;
                                                         color: rgba(255, 255 ,255,1);
                                                         font-weight: 900;
                          " >{{ __('ログイン') }}</div>

                          <div class="card-body">
                              <form method="POST" action="{{ route('login') }}">
                                  @csrf

                                  <div class="form-group row">
                                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                                      <div class="col-md-6">
                                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                          @error('email')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                                      <div class="col-md-6">
                                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <div class="col-md-6 offset-md-4">
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                              <label class="form-check-label" for="remember">
                                                  {{ __('パスワードを保存する') }}
                                              </label>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group row mb-0">
                                      <div class="col-md-8 offset-md-4">

                                          <div class="mx-auto" style="width: 200px;">
                                            <div class="aboutUs-btn">
                                              <button type="submit" >ログイン</button>
                                            </div>
                                          </div>
                                          @if (Route::has('password.request'))
                                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                                  {{ __('パスワードを忘れた方') }}
                                              </a>

                                              <a class="btn btn-link" href="/register">
                                                アカウントをお持ちでない方
                                              </a>
                                          @endif
                                      </div>
                                  </div>
                              </form>
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

<!-- ***** Contact Area End ***** -->
@endsection
