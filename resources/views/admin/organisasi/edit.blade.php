@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminorganisasi">Organisasi</a> / Edit Organisasi
@endsection()

@section('judul')
Edit Organisasi 
@endsection()

@section('content')
<div class="container">
<form action="/adminorganisasi/edit/{{$organisasi->id}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
{{ csrf_field() }}
    <div class="form-group">
        <label for="nama_organisasi">Nama LK / OK :</label>
        <input type="text" class="form-control" id="nama_organisasi" name="nama_organisasi" placeholder="Masukan nama LK / OK" value="{{$organisasi->nama_organisasi}}">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="sejak">Tahun Berdiri :</label>
        <input type="text" class="form-control" id="sejak" name="sejak" placeholder="Masukan Tahun Berdiri" value="{{$organisasi->sejak}}">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="ketua_organisasi">Ketua LK / OK :</label>
        <input type="text" class="form-control" id="ketua_organisasi" name="ketua_organisasi" placeholder="Masukan nama ketua LK / OK" value="{{$organisasi->ketua_organisasi}}">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="kontak">No Telp / Wa / Line :</label>
        <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Masukan kontak person" value="{{$organisasi->kontak}}">
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
    <p>Ketika Edit File Foto Harus diisi</p>
    {{ csrf_field() }}
    <div class="form-group">
        <button class="btn btn-danger btn-sm"> Submit</button>
    </div>
    </form>
</div>
<br><br>

@endsection()