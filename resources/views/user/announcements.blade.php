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
                <h1>Announcements</h1>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->

<div class="news-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                @foreach($announcements as $n)
                <div class="news-content">
                    <a href="/announcements/{{$n->id}}"><img src="{{asset('images/speaker.png')}}" alt="" weight="730px" height="377.58"></a>

                    <header class="entry-header d-flex flex-wrap justify-content-between align-items-center">
                        <div class="header-elements">
                            <div class="posted-date">{{date('d M Y', $n->created_at->timestamp)}}</div>

                            <h2 class="entry-title"><a href="/announcements/{{$n->id}}" style="text-decoration: none;">{{$n->judul}}</a></h2>

                            <div class="post-metas d-flex flex-wrap align-items-center">
                                <span class="cat-links">in <a href="#">Announcements</a></span>
                            </div>
                        </div>
                    </header>

                    <div class="entry-content">
                        <p>{!!Str::words($n->isi, 100 , '...')!!}</p>
                    </div>

                    <footer class="entry-footer">
                        <a href="/announcements/{{$n->id}}" class="btn gradient-bg">Read More</a>
                    </footer>
                </div>
                <hr>
                @endforeach

                <ul class="pagination d-flex flex-wrap align-items-center p-0">
                {{$announcements->links()}}
                </ul>
            </div>

            <div class="col-12 col-lg-4">
                <div class="sidebar">

                    <div class="popular-posts">
                        
                    </div><!-- .cat-links -->

                    <div class="upcoming-events">
                        <h2>News</h2>

                        <ul class="p-0">
                            @foreach($news as $n)
                            <li class="d-flex flex-wrap justify-content-between align-items-center">
                                <figure><a href="#"><img src="{{url('uploads/'.$n->foto)}}"height="72px" alt=""></a></figure>

                                <div class="entry-content">
                                    <h3 class="entry-title"><a href="#">{{$n->judul}}</a></h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <span class="posted-date"><a href="#">{{date('d M Y', $n->created_at->timestamp)}}</a></span>
                                        
                                    </div>

                                    <p>{!!Str::words($n->isi, 10 , '...')!!}</p>
                                    <a href="/news/{{$n->id}}">Read More</a>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div><!-- .cat-links -->

                    
                </div><!-- .sidebar -->
            </div><!-- .col -->
        </div>
    </div>
</div>

@endsection