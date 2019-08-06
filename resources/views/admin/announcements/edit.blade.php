@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminannouncements ">News</a> / Create Announcements
@endsection()

@section('judul','Edit Announcements')

@section('content')
<div class="container">
<form action="/adminannouncements/edit/{{$announcements ->id}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
{{ csrf_field() }}
<div class="form-group">
    <label for="judul">Judul</label><br>
    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul" value="{{$announcements->judul}}">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group">
    <label for="isi">Masukan isi news</label><br>
    <textarea name="isi" placeholder="Masukan isi news" rows="10" cols="100" >{{$announcements->isi}}</textarea> 
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
    {{ csrf_field() }}
    <div class="form-group">
        <button class="btn btn-danger btn-sm"> Submit</button>
    </div>
    </form>
</div>
@endsection()