@extends('layouts.layout')

@section('nav')
@include('layouts.navbar')
@endsection

@section('bodyclass', 'single-page news-page')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Download Center</h1>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->

<div class="news-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <p><i>*untuk mendownload file P3DK / LPJ, diharap mengisi formulir yang ada terlebih dahulu</i></p> <br>
                <h4>FORMULIR MEMBUAT P3DK</h4>
                <a href="/createp3dk" class="">Click Here!</a>
                <br> <br> <hr style="weight:100px">
                <h4>FORMULIR MEMBUAT LPJ</h4>
                <a href="/createlpj" class="">Click Here!</a>
                <br> <br> <hr>
                <h4>LINK DOWNLOAD PANDUAN P3DK & LPJ</h4> <br>
                <a href="/downloadpanduanp3dk" class=""><i class="fa fa-download"> </i> Download Panduan P3DK </a> <br> <br>
                <a href="/downloadpanduanlpj" class=""><i class="fa fa-download"> </i> Download Panduan LPJ </a> <br> <br>
                <a href="/download-alur-p3dk-lpj" class=""><i class="fa fa-download"> </i> Download Alur P3DK & LPJ </a> 
                <br><hr>

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