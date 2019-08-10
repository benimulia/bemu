@extends('layouts.layout')

@section('nav')
<<<<<<< HEAD
<nav class="site-navigation d-flex justify-content-end align-items-center">
    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
        <li><a href="/">Home</a></li>
        <li><a href="/aboutus">About us</a></li>
        <li class="current-menu-item"><a href="/news">News</a></li>
        <li><a href="/organisasi">Organization</a></li>
        <li><a href="/downloadcenter">Download Center</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav><!-- .site-navigation -->
=======
@include('layouts.navbar')<!-- .site-navigation -->
>>>>>>> 347b7a24fff05996f83026e3dc1dc7522ef76163
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
                <div class="news-content">
                    <span> <a href="/news">&#8592 Kembali</a></span> <br> <br>
                    <a href="#"><img src="{{url('uploads/'.$n->foto)}}" alt="" weight="730px" height="377.58"></a>

                    <header class="entry-header d-flex flex-wrap justify-content-between align-items-center">
                        <div class="header-elements">
                            <div class="posted-date">{{date('d M Y', $n->created_at->timestamp)}}</div>

                            <h2 class="entry-title"><a href="#">{{$n->judul}}</a></h2>

                            <div class="post-metas d-flex flex-wrap align-items-center">
                                <span class="cat-links">in <a href="#">News</a></span>
                                <span class="post-author">by <a href="#">{{$n->keterangan}}</a></span>
                            </div>
                        </div>
                    </header>

                    <div class="entry-content">
                        <p>{!! nl2br(e($n->isi))!!}</p>
                    </div>
                </div>
                <hr>
            </div>

            @include('layouts.sidebar')
        </div>
    </div>
</div>

@endsection