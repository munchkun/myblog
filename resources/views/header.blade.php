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
                                <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="seleneDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="seleneDropdown">
                                        <a class="dropdown-item" href="index.html">Topページ</a>
                                        <a class="dropdown-item" href="about.html">About Us</a>
                                        <a class="dropdown-item" href="services.html">Services</a>
                                        <a class="dropdown-item" href="blog.html">Blog</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
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
