@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminorganisasi">Organisasi</a> / Create Organisasi
@endsection()

@section('judul')
Create Organisasi 
@endsection()

@section('content')
<div class="container">
<form method="POST" action="/adminorganisasi/create" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="form-group">
        <label for="nama_organisasi">Nama LK / OK :</label>
        <input type="text" class="form-control" id="nama_organisasi" name="nama_organisasi" placeholder="Masukan nama LK / OK">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="sejak">Tahun Berdiri :</label>
        <input type="text" class="form-control" id="sejak" name="sejak" placeholder="Masukan Tahun Berdiri">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="ketua_organisasi">Ketua LK / OK :</label>
        <input type="text" class="form-control" id="ketua_organisasi" name="ketua_organisasi" placeholder="Masukan nama ketua LK / OK">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="kontak">No Telp / Wa / Line :</label>
        <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Masukan kontak person">
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
    </form>
</div>
<br><br>

@endsection()