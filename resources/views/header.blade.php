@section('header')
<header class="header_area animated">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Menu Area Start -->
            <div class="col-12">
                <div class="menu_area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- Logo -->
                        <a class="navbar-brand" href="#">proudly</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#selene-navbar" aria-controls="selene-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Menu Area -->
                        <div class="collapse navbar-collapse" id="selene-navbar">
                            <ul class="navbar-nav ml-auto" id="nav">
                                <li class="nav-item active"><a class="nav-link" href="/">ホーム</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about">このサイトについて</a></li>
                                <li class="nav-item"><a class="nav-link" href="/blog">ブログ</a></li>
                                <li class="nav-item"><a class="nav-link" href="/app">アプリ</a></li>
                                <li class="nav-item"><a class="nav-link" href="/contact">お問い合わせ</a></li>
                            </ul>
                            <!-- Search btn -->
                            <div class="search-button d-lg-none">
                                <a href="#" class="search-btn"><img src="img/core-img/search-icon.png" alt="Search"></a>
                            </div>
                        </div>
                        <!-- Search btn -->
                        <div class="search-button d-none d-lg-block">
                            <a href="#" class="search-btn"><img src="img/core-img/search-icon.png" alt="Search"></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="search-form-area">
    <!-- Remove btn -->
    <div class="remove-btn">
        <i class="fa fa-times"></i>
    </div>
    <!-- Search Form -->
    <form action="#" method="post">
        <input type="search" name="search" id="search" placeholder="Type keywords &amp; hit enter">
        <button type="submit" class="d-none"><img src="img/core-img/search-icon.png" alt="Search"></button>
    </form>
</div>
@endsection
