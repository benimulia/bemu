@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminevents">Events</a> / Create Event
@endsection()

@section('judul')
Create Event
@endsection()

@section('content')

<div class="container">
<form method="POST" action="/adminnews/create" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="form-group">
        <label for="judul">Nama Event :</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="keterangan">Penulis :</label>
        <input readonly="readonly" type="text" class="form-control" id="keterangan" name="keterangan" placeholder="{{ Auth::user()->name }}"value="{{ Auth::user()->name }}">
    </div>
    <div class="form-group">
        <label for="pukul">Tanggal Event:</label><br>
        <input class="form-control" id="tgl" name="tgl"  type="date" id="start" name="trip-start" min="2019-01-01" max="2019-12-31">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="keterangan">Tempat Event :</label>
        <input readonly="readonly" type="text" class="form-control" id="keterangan" name="keterangan" placeholder="{{ Auth::user()->name }}"value="{{ Auth::user()->name }}">
    </div>
    <div class="form-group">
        <label for="isi">Deskripsi Event :</label><br>
        <textarea name="isi" placeholder="Tulis deskripsi event di sini" rows="5" cols="100"></textarea>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="file">Upload file</label>
        <input type="file" name="file" id="file">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        <p class="text-danger">{{$errors->first('file')}}</p>
    </div>
    <div class="form-group">
        <button class="btn btn-success btn-md"> Submit</button>
    </div>
    
    </form>
</div>
<br><br>
@endsection
