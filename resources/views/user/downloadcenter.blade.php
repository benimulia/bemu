@extends('layouts.layout')

@section('nav')
<<<<<<< HEAD
<nav class="site-navigation d-flex justify-content-end align-items-center">
    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
        <li><a href="/">Home</a></li>
        <li><a href="/aboutus">About us</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="/organisasi">Organization</a></li>
        <li class="current-menu-item"><a href="/downloadcenter">Download Center</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav><!-- .site-navigation -->
=======
@include('layouts.navbar')
>>>>>>> 347b7a24fff05996f83026e3dc1dc7522ef76163
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

            @include('layouts.sidebar')
        </div>
    </div>
</div>

@endsection