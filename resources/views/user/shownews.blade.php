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