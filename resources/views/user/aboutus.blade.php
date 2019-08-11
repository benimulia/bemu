@extends('layouts.layout')

@section('nav')
<nav class="site-navigation d-flex justify-content-end align-items-center">
    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
        <li><a href="/">Home</a></li>
        <li class="current-menu-item"><a href="/aboutus">About us</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="/organisasi">Organization</a></li>
        <li><a href="/downloadcenter">Download Center</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav><!-- .site-navigation -->
@endsection

@section('bodyclass', 'single-page news-page')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>About Us</h1>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->
<br/>
<div class="table-responsive center">
<table class="table" style="border:none" width="100%" cellspacing="0">
    <thead style="border:none">
        <th style=" border:none "></th>
        <th colspan="15" style=" text-align: center; border:none "><h3>BADAN EKSEKUTIF MAHASISWA</h3><P>Universitas Kristen Duta Wacana</p></th>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr style="border:none">
            <td></td>
            <td></td>
            <td></td>
            <td style=" text-align: center; border:none "><img src="{{ url('images/BEMU-icon.png') }}" width="250%" height="auto"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <p><strong>Nama &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</strong> Badan Eksekutif Mahasiswa Universitas Kristen Duta Wacana<p>
                <p><strong>Kontak Person &nbsp &nbsp &nbsp :</strong> 082276730207 ( Mia )<p>
                <p><strong>Alamat &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</strong> Jl. Dr. Wahidin Sudirohusodo No. 5-25<p>
                <p><strong>E-mail &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</strong> bemu@students.ukdw.ac.id<p>
            </td>
        </tr>

</table>
</div><br/>
<div class="news-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <center><h4>SEJARAH SINGKAT</h4></center><br/>
                <p>
                -
                </p>

            </div>
        </div>
    </div>
</div>

@endsection