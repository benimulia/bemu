@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminannouncements">News</a> / Create Announcements
@endsection()

@section('judul')
Create Announcements 
@endsection()

@section('content')
<div class="container">
<form method="POST" action="/adminannouncements/create" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="form-group">
        <label for="judul">Judul :</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="isi">Isi :</label><br>
        <textarea name="isi" placeholder="Tulis isi news di sini" rows="10" cols="100"></textarea>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <button class="btn btn-danger btn-sm"> Submit</button>
    </div>
    
    </form>
</div>
<br><br>

@endsection()
