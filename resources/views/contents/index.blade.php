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
                        <h2>あなたの体に眠っている性の話</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md">
                    <p>世の中には自分の性に関する事情は隠しておきたいと思う人がほとんどである。しかし、そのようにみんなが隠してしまい、タブー視するからこそ未解決の問題が山積みなのが性に関する学問分野。しかし、どの学問の研究だって必ず人々の生活を向上させたいという背景があるはず。このサイトはこのサイトを見に来てくれている皆様の暮らしに性に関する研究が生かされる、そんな社会を目指すためのサイトです。</p>
                </div>
                <div class="col-12 col-md">
                    <p>このサイトで行えることは主に3つ。1つ目は、性に関する最先端の研究をしている人たちの話や情報を得られること。2つ目は、性に関する学問に興味を持っている初学者にも読みやすい性に関する情報を得られること。3つ目に、性に関する学問の発展に様々な方法で寄与すること。その他にもコンテンツは順次増やしていく予定です。今後ともMUGI’s LABOをどうぞよろしくお願いします。</p>
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

        <div class="team--member-area">
            <div class="container-fluid">
                <div class="row">

                    @foreach($members as $member)
                    <div class="col-12 col-sm-6 col-md-4 col-lg">
                        <div class="single-team-member">
                            <!-- Team Member Thumb -->
                            <div class="team-member-thumb">
                                <img src="{{ asset($member->picture) }}" alt="">
                                <!-- Overlay -->
                                <div class="team-member-overlay">
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>


                        </div>
                    </div>
                    @endforeach
                  </div>
              </div>
          </div>
        </section>

    <!-- ***** Why Chose Us Area End ***** -->
@endsection
