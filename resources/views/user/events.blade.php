@extends('layouts.layout')

@section('nav')
@include('layouts.navbar')<!-- .site-navigation -->
@endsection

@section('bodyclass', 'single-page news-page')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>News</h1>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->

<div class="news-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                @foreach($events as $n)
                <div class="news-content">
                    <a href="/events/{{$n->id}}"><img src="{{url('uploads/'.$n->foto)}}" alt="" weight="730px" height="377.58"></a>

                    <header class="entry-header d-flex flex-wrap justify-content-between align-items-center">
                        <div class="header-elements">
                            <div class="posted-date">{{date('d M Y', $n->created_at->timestamp)}}</div>

                            <h2 class="entry-title"><a href="/news/{{$n->id}}" style="text-decoration: none;">{{$n->judul}}</a></h2>

                            <div class="post-metas d-flex flex-wrap align-items-center">
                                <span class="cat-links">in <a href="#">News</a></span>
                                <span class="post-author">by <a href="#">{{$n->keterangan}}</a></span>
                            </div>
                        </div>
                    </header>

                    <div class="entry-content">
                        <p>{!!Str::words($n->isi, 100 , '...')!!}</p>
                    </div>

                    <footer class="entry-footer">
                        <a href="/news/{{$n->id}}" class="btn gradient-bg">Read More</a>
                    </footer>
                </div>
                <hr>
                @endforeach

                <ul class="pagination d-flex flex-wrap align-items-center p-0">
                {{$news->links()}}
                </ul>
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
                                <figure><a href="#"><img src="images/p-1.jpg" alt=""></a></figure>

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

                                    <div class="posted-date">March 09, 2018</div>
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