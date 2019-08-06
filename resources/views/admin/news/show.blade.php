@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminnews">News</a> / Detail News
@endsection()

@section('judul')
Detail News
@endsection()

@section('content')
<div class="container">
<span> <a href="/adminnews">&#8592 Kembali</a></span>
<div class="card mb-3">
          <div class="card-header">
            <h3>Judul : <b>{{$news->judul}}</b></h3><br/>
            <h6>Penulis : {{$news->keterangan}}</h6></div><br/>
            
        @if($news->foto != null)
    <p style="text-align:center"><img src="{{ url('uploads/'.$news->foto) }}" width="25%" height="auto" alt="{{$news->foto}}"></p>
    <div class="card-header">
        @else
                <p>Tidak ada gambar</p>
        @endif
            <h6>Isi : </h6>
            <h6>{!! nl2br(e($news->isi))!!}</h6></div>
</div>
</div>
@endsection()
