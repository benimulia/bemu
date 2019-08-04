@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminnews">News</a> / Create News
@endsection()

@section('judul')
Create News 
@endsection()

@section('content')
<div class="container">
<form method="POST" action="/adminnews/create" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="form-group">
        <label for="judul">Judul :</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="keterangan">Penulis :</label>
        <input readonly="readonly" type="text" class="form-control" id="keterangan" name="keterangan" placeholder="{{ Auth::user()->name }}"value="{{ Auth::user()->name }}">
    </div>
    <div class="form-group">
        <label for="isi">Isi :</label><br>
        <textarea name="isi" placeholder="Tulis isi news di sini" rows="10" cols="100"></textarea>
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
        <button class="btn btn-danger btn-sm"> Submit</button>
    </div>
    <div class="form-group">
        <button class="btn btn-danger btn-sm"><input type="reset"> Reset</button>
    </div>
    
    </form>
</div>
<br><br>

@endsection()
