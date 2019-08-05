@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminnews">News</a> / Create News
@endsection()

@section('judul','Edit News')

@section('content')
<div class="container">
<form action="/adminnews/edit/{{$news->id}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
{{ csrf_field() }}
<div class="form-group">
    <label for="judul">Judul</label><br>
    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul" value="{{$news->judul}}">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group">
        <label for="keterangan">Penulis :</label>
        <input readonly="readonly" type="text" class="form-control" id="keterangan" name="keterangan" placeholder="{{ Auth::user()->name }}"value="{{ Auth::user()->name }}">
    </div>
<div class="form-group">
    <label for="isi">Masukan isi news</label><br>
    <textarea name="isi" placeholder="Masukan isi news" rows="10" cols="100" >{{$news->isi}}</textarea> 
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group">
    <label for="file">Upload file</label>
    <input type="file" name="file" id="file">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
<p>Ketika Edit File Foto Harus diisi</p>
    {{ csrf_field() }}
    <div class="form-group">
        <button class="btn btn-danger btn-sm"> Submit</button>
    </div>
    </form>
</div>
@endsection()