@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminevents">Events</a> / Create Event
@endsection()

@section('judul')
Create Event
@endsection()

@section('content')

<div class="container">
<span> <a href="/adminevents">&#8592 Kembali</a></span>
<form method="POST" action="/adminevents/create" >
{{ csrf_field() }}
    <div class="form-group">
        <label for="keterangan">Penulis :</label>
        <input readonly="readonly" type="text" class="form-control" id="keterangan" name="keterangan" placeholder="{{ Auth::user()->name }}"value="{{ Auth::user()->name }}">
    </div>
    <div class="form-group">
        <label for="judul">Nama Event :</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan nama">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="pukul">Tanggal Event:</label><br>
        <input class="form-control-sm" id="tglaw" name="tglaw"  type="date" id="start" name="trip-start" min="2019-01-01" max="2019-12-31"> - 
        <input class="form-control-sm" id="tglak" name="tglak"  type="date" id="start" name="trip-start" min="2019-01-01" max="2019-12-31">
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="keterangan">Pukul :</label><br>
        <input type="number" min="0"max="23" class="form-control-sm" id="jamAwal" name="jamAwal" placeholder="Jam">:
        <input type="number" min="0"max="59" class="form-control-sm" id="menitAwal" name="menitAwal" placeholder="Menit"> -
        <input type="number" min="0"max="23" class="form-control-sm" id="jamAkhir" name="jamAkhir" placeholder="Jam">:
        <input type="number" min="0"max="59" class="form-control-sm" id="menitAkhir" name="menitAkhir" placeholder="Menit"> / Jika jam selesai belum ditentukan tidak usah diisi
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="keterangan">Tempat Event : ( Jika belum ditentukan tidak usah diisi )</label>
        <input type="text" class="form-control" id="tpt" name="tpt" placeholder="Masukan Tempat">
        <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group">
        <label for="isi">Deskripsi Event : (opsional)  </label><br>
        <textarea name="isi" placeholder="Tulis deskripsi event di sini" rows="5" cols="100"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-success btn-md"> Submit</button>
    </div>
    
    </form>
</div>
<br><br>
@endsection
