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
            <img class="welcome-first-shape" src="img/core-img/welcome-bg-1.png" alt="">
            <img class="welcome-second-shape" src="img/core-img/welcome-bg-2.png" alt="">
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
                <div class="col-12 col-lg-6">
                    <div class="aboutUs-headline">
                        <h2>寄付</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md">
                    <p>このサイトを見て興味を持ってくれた方の中でもしかしたら、研究の発展の貢献したいという方がいらっしゃるかもしれない。もしそのような方は下のボタンから寄付をお願いいたします。また、あなたが寄付してくださった研究の内容がどうなったのかについて研究結果など知りたい方はページ上のNews&Contactsに研究結果が出たものから随時載せていきます。
                    結果を楽しみにお待ちください。また、コラムの方でも詳しく取り上げることがあるので楽しみにしていてください。</p>
                </div>
                <div class="col-12 col-md">
                    <p>またこのサイトでの研究資金の調達を考えている研究者の方はページ上のNews&ContactsからContactsに記載してあるメールアドレスにご連絡ください。メールに1週間以上返信がなかった場合はTwitterのDMまでお問い合わせください。よろしくお願いします。</p>
                </div>
            </div>
        </div>

        <!-- Pie Bars Area Start -->


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="aboutUs-btn">
                        <a class="text-center" href="/donation/menu">寄付しにいく</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->


@endsection
