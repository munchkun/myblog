@extends('template')

@section('title','あなたの体の不適切な話')

@section('description','あなたの体の不適切な話')

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
                        <h2>TOP</h2>

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
                        <h2>あなたの体の不適切な話</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md">
                    <p>先に断っておく。不適切な話というキャッチコピーにしたが、私はこれ（性的なこと）が不適切なことだとは1ミリも思っていない。あなたが思うより不適切なことはあなたの好奇心をくすぐることや驚かせることで溢れている。どんな分野でもそうだが、プロフェッショナルの話す内容は非常に面白いが、使う言葉が難しかったり、理解に苦しむ難解な趣旨であることも珍しくない。このサイトでは性的な分野の内容を万人にわかりやすく、女子大生の私の視点でまとめていく。</p>
                </div>
                <div class="col-12 col-md">
                    <p>このサイトの目的は3つ。性的なことを科学的に研究する学問の分野がこの世には存在している。その分野に興味をもってくれる人間を増やすこと。また、この分野の初学者が楽しんで学んでもらえるように支援すること。最後に、その分野の研究者の仕事を増やしたり研究の支援をすること。そのために努力に限りを尽くしていこうと思うので、応援よろしくお願いいたします。</p>
                </div>
            </div>
        </div>

        <!-- Pie Bars Area Start -->


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="aboutUs-btn">
                        <a class="text-center" href="/blog">コラムへいく</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Why Chose Us Area Start ***** -->
    <section class="whyChoose-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="aboutUs-headline">
                        <h2>Why choose us?</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta.Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>

        <div class="team--member-area">
            <div class="container-fluid">
                <div class="row">


                    <!-- Single Team Member Area -->
                  </div>
              </div>
          </div>
    <!-- ***** Why Chose Us Area End ***** -->
@endsection