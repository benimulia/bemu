@extends('layouts.layout')

@section('nav')
@include('layouts.navbar')<!-- .site-navigation -->
@endsection


@section('content')
<div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img weight="1349px" src="images/Foto_BEMU.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>BEM</h1>
                                    <h4>Universitas Kristen Duta Wacana</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Official website Badan Eksekutif Mahasiswa Universitas Kristen Duta Wacana ...</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="about.html" class="btn gradient-bg mr-2">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
            
            <div class="swiper-slide hero-content-wrap">
                <img weight="1349px" src="images/Foto_BEMU.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h3>Selamat Datang Mahasiswa Baru</h3>
                                    <h4>Universitas Kristen Duta Wacana 2019</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Selamat datang kami ucapkan kepada mahasiswa baru UKDW 2019 dari berbagai daerah di seluruh Indonesia.
                                    Selamat menempuh dunia perkuliahan dengan penuh semangat! ... </p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">                                    
                                    <a href="#" class="btn gradient-bg mr-2">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img weight="1349px" src="images/Foto_BEMU.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>Test</h1>
                                    <h4>4 a better world</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
        </div><!-- .pagination-wrap -->

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .hero-slider -->


    <div class="our-causes">
        <div class="container">
            <div class="row">
                <div class="coL-12">
                    <div class="section-heading">
                        <a href="/news" style="text-decoration: none;"><h2 class="entry-title">News</h2></a>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-12">
                    <div class="swiper-container causes-slider">
                        <div class="swiper-wrapper">

                            @foreach ($news as $news)

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ url('uploads/'.$news->foto) }}" alt="{{$news->foto}}" height="212px" >

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="/news/{{$news->id}}" class="btn gradient-bg mr-2">Read More</a>
                                        </div><!-- .figure-overlay -->
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="#">{{$news->judul}}</a></h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">{{$news->keterangan}}</p>
                                            <p class="m-0">{{$news->created_at->format('d, M Y ')}}</p>                                            
                                        </div><!-- .entry-content -->
                                            <p>{!!Str::words($news->isi, 20 , '...')!!}</p>
                                        <div class="fund-raised w-100">
                                        <a href="/news/{{$news->id}}">Read More</a>
                                            
                                        </div><!-- .fund-raised -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->
                            
                            @endforeach

                        </div><!-- .swiper-wrapper -->

                    </div><!-- .swiper-container -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

    
    <div class="home-page-events">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="upcoming-events">
                        <div class="section-heading">
                            <a href="/announcements" style="text-decoration: none;"><h2 class="entry-title">Announcements</h2></a>
                        </div><!-- .section-heading -->

                        @foreach($announcements as $an)
                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="{{asset('images/speaker.png')}}" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">{{$an->judul}}</a></h3>

                                    <div class="">
                                        {{$an->created_at->format('d, M Y ')}}
                                    </div><!-- .posted-date -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">{!!Str::words($an->isi, 100 , '...')!!}</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="/announcements/{{$an->id}}">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->
                        <hr>
                        @endforeach
                        
                    </div><!-- .upcoming-events -->
                </div><!-- .col -->
                    
               @include('fileevent.events')

            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->

    
    <div class="home-page-limestone">
        <div class="container">
            <div class="row align-items-end">
                <div class="coL-12 col-lg-6">
                    <div class="section-heading">
                        <h2 class="entry-title">We love to help all the children that have problems in the world. After 15 years we have many goals achieved.</h2>

                        <p class="mt-5">Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>
                    </div><!-- .section-heading -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6">
                    <div class="milestones d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/teamwork.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="120" data-speed="2000"></div>
                                    <div class="counter-k">K</div>
                                </div>

                                <h3 class="entry-title">Children helped</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/donation.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="79" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Water wells</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/dove.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="253" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Volunteeres</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
                    </div><!-- .milestones -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

@endsection
