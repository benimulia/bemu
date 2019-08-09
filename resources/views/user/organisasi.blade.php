@extends('layouts.layout')

@section('nav')
<nav class="site-navigation d-flex justify-content-end align-items-center">
    <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
        <li><a href="/">Home</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="/news">News</a></li>
        <li class="current-menu-item"><a href="/organisasi">Organization</a></li>
        <li><a href="/downloadcenter">Download Center</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav><!-- .site-navigation -->
@endsection

@section('bodyclass', 'single-page news-page')

@section('content')
<div class="container">
  <div class ="row text-center">
    @foreach($organisasi as $organisasi)
    <div class="col-md-4"> <br><br>
         <div class="card">
            @if($organisasi->foto_organisasi !=null)
            <img class="card-img-top" src="{{ url('uploads/'.$organisasi->foto_organisasi) }}" width="80px" height="auto">
            @else
            <img class="card-img-top" src="{{ asset('utama/img/user.png')}}" alt="Card image cap">
            @endif
            <div class="card-body"> 
               <h5 class="card-title border-bottom pb-3">{{ $organisasi ->nama_organisasi }} </h5>
               <p class="card-text"><strong>Berdiri Sejak : </strong>{{ $organisasi ->sejak }}</p>
               <p class="card-text"><strong>Ketua Organisasi : </strong>{{ $organisasi ->ketua_organisasi }}</p>
               <p class="card-text"><strong>Kontak : </strong>{{ $organisasi ->kontak }}</p>
            </div>
         </div>
    </div>
    @endforeach
  </div><br/><br/>
</div>
@endsection

