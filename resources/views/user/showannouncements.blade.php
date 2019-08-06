@extends('layouts.layout')

@section('nav')
<nav class="site-navigation d-flex justify-content-end align-items-center">
    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
        <li><a href="/">Home</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="portfolio.html">Organization</a></li>
        <li><a href="news.html">Download Center</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav><!-- .site-navigation -->
@endsection

@section('bodyclass', 'single-page news-page')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Announcements</h1>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->

<div class="news-wrap">
    <div class="container">
        <div class="row">        
            <div class="col-12 col-lg-8">
                <div class="news-content">
                    <span> <a href="/announcements">&#8592 Kembali</a></span> <br> <br>
                    <a href="#"><img src="{{asset('images/speaker.png')}}" alt="" weight="730px" height="377.58"></a>

                    <header class="entry-header d-flex flex-wrap justify-content-between align-items-center">
                        <div class="header-elements">
                            <div class="posted-date">{{date('d M Y', $n->created_at->timestamp)}}</div>

                            <h2 class="entry-title"><a href="#">{{$n->judul}}</a></h2>

                            <div class="post-metas d-flex flex-wrap align-items-center">
                                <span class="cat-links">in <a href="#">Announcements</a></span>
                            </div>
                        </div>
                    </header>

                    <div class="entry-content">
                        <p>{!! nl2br(e($n->isi))!!}</p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-12 col-lg-4">
                <div class="sidebar">
                    <div class="search-widget">
                        <form class="flex flex-wrap align-items-center">
                            <input type="search" placeholder="Search...">
                            <button type="submit" class="flex justify-content-center align-items-center">GO</button>
                        </form><!-- .flex -->
                    </div><!-- .search-widget -->

                    <div class="popular-posts">
                        <h2>Popular Posts</h2>

                        <ul class="p-0">
                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="{{images/p-1.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">A new cause to help</a></h3>

                                    <div class="posted-date">MArch 12, 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="images/p-2.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">We love to help people</a></h3>

                                    <div class="posted-date">MArch 10, 2018</div>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="images/p-3.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">The new ideas for helping</a></h3>

                                    <div class="posted-date">MArch 09, 2018</div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .cat-links -->

                    <div class="upcoming-events">
                        <h2>Upcoming Events</h2>

                        <ul class="p-0">
                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="images/u-1.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">Fundraiser for Kids</a></h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <span class="posted-date"><a href="#">Aug 25, 2018</a></span>
                                        <span class="event-location"><a href="#">Ball Room New York</a></span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="images/u-2.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">The childrens</a></h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <span class="posted-date"><a href="#">Aug 25, 2018</a></span>
                                        <span class="event-location"><a href="#">Ball Room New York</a></span>
                                    </div>

                                    <p>Consectetur adipiscing elit. Mauris tempus vestib ulum.</p>
                                </div>
                            </li>

                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="images/u-3.jpg" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">Bring water </a></h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <span class="posted-date"><a href="#">Aug 25, 2018</a></span>
                                        <span class="event-location"><a href="#">Ball Room New York</a></span>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .cat-links -->

                    
                </div><!-- .sidebar -->
            </div><!-- .col -->
        </div>
    </div>
</div>

@endsection