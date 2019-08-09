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
                <h1>Events</h1>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->

<div class="news-wrap">
    <div class="container">
        <div class="section-heading">
            <h2 class="entry-title">This Year</h2>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 ">


                @foreach($events as $ev)

                
                <div class="row row-stripped">
                    
                    @if ( $ev->tanggalAwal != $ev->tanggalAkhir)
                        <div class="col-2 text-right">
                            <h1 class="display-5"><span class="badge badge-secondary">{{date('d',strtotime($ev->tanggalAwal))}}</span></h1>
                            <h4>{{date('M',strtotime($ev->tanggalAwal))}}</h4>
                        </div> 
                        
                        <div class="col-2 text-left">
                            <h1 class="display-5"><span class="badge badge-secondary">{{date('d',strtotime($ev->tanggalAkhir))}}</span></h1>
                            <h4>{{date('M',strtotime($ev->tanggalAkhir))}}</h4>
                        </div>
                    @else
                        <div class="col-4 text-center">
                            <h1 class="display-5"><span class="badge badge-secondary">{{date('d',strtotime($ev->tanggalAwal))}}</span></h1>
                            <h4>{{date('M',strtotime($ev->tanggalAwal))}}</h4>
                        </div>
                    @endif
                    <div class="col-8">
                        <h5 class="text-uppercase"><strong>{{$ev->nama}}</strong></h5>
                        <ul class="list-inline ">
                            <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i>
                                @if ( $ev->tanggalAwal != $ev->tanggalAkhir)
                                    {{date('D',strtotime($ev->tanggalAwal))}}-{{date('D',strtotime($ev->tanggalAkhir))}}
                                @else
                                    {{date('D',strtotime($ev->tanggalAwal))}}
                                @endif
                            </li>
                            <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 
                                {{$ev->jamAwal}}:{{$ev->menitAwal}} - 
                                @if($ev->jamAkhir == NULL || $ev->menitAkhir == NULL)
                                 Selesai
                                @else
                                 {{$ev->jamAkhir}}:{{$ev->menitAkhir}}
                                @endif
                            </li>
                            @if($ev->tempat != NULL)
                                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i>{{$ev->tempat}}</li>
                            @endif
                        </ul>
                        <p  id="{{$ev->id}}">{{$ev->deskripsi}}</p>
                    </div>
                <hr>
                
                </div>
                @endforeach
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