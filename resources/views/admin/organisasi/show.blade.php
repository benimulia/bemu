@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminorganisasi">Organisasi</a> / Detail Organisasi
@endsection()

@section('judul')
Detail Organisasi
@endsection()

@section('content')
<div class="container">
<span> <a href="/adminorganisasi">&#8592 Kembali</a></span>
<div class="card mb-3">
          <div class="card-header">
            <h3>Nama LK / OK : <b>{{$organisasi->nama_organisasi}}</b></h3><br/>
            <h6>Berdiri Sejak : {{$organisasi->sejak}}</h6>
            <h6>Ketua Organisasi : {{$organisasi->ketua_organisasi}}</h6></div><br/>
            
        @if($organisasi->foto_organisasi != null)
    <p style="text-align:center"><img src="{{ url('uploads/'.$organisasi->foto_organisasi) }}" width="25%" height="auto" alt="{{$organisasi->foto_organisasi}}"></p>
    <div class="card-header">
        @else
                <p>Tidak ada gambar</p>
        @endif
            <h6>Kontak Person : {{$organisasi->kontak}}</h6></div>
</div>
</div>
@endsection()
