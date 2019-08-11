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
                <div class="news-content">
                    <span> <a href="/announcements">&#8592 Kembali</a></span> <br> <br>
                    <a href="#"><img src="{{asset('images/speaker.png')}}" alt="" weight="730px" height="377.58"></a>

                    <header class="entry-header d-flex flex-wrap justify-content-between align-items-center">
                        <div class="header-elements">
                            <div class="posted-date">{{date('d M Y', $announcements->created_at->timestamp)}}</div>

                            <h2 class="entry-title"><a href="#">{{$announcements->judul}}</a></h2>

                            <div class="post-metas d-flex flex-wrap align-items-center">
                                <span class="cat-links">in <a href="#">Announcements</a></span>
                            </div>
                        </div>
                    </header>

                    <div class="entry-content">
                        <p>{!! nl2br(e($announcements->isi))!!}</p>
                    </div>
                </div>
                <hr>
            </div>

        </div>
    </div>
</div>

@endsection