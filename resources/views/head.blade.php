@section('head')
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description')">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">
    <!-- Core Stylesheet -->
    <link href="{{asset('style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
@endsection
