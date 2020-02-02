<!DOCTYPE html>
<html lang="ja">
<head>
    @yield('head')
</head>
<body>
  <div id="preloader">
      <div class="selene-preloader"></div>
  </div>

        @yield('header')

    <div id="wrapper">
        @yield('content')
    </div>

        @yield('footer')


        <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/active.js')}}"></script>
</body>
</html>
