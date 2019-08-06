@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminannouncements">News</a> / Detail Announcements
@endsection()

@section('judul')
Detail Announcements
@endsection()

@section('content')
<div class="container">
<span> <a href="/adminannouncements">&#8592 Kembali</a></span>
<div class="card mb-3">
          <div class="card-header">
            <h3>Judul : <b>{{$announcements->judul}}</b></h3><br/>
            <h6>Isi : </h6>
            <h6>{!! nl2br(e($announcements->isi))!!}</h6></div>
</div>
</div>
@endsection()
