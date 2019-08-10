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

            @include('layouts.sidebar')
        </div>
    </div>
</div>

@endsection