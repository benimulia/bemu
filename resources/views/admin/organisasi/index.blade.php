@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminorganisasi">Organisasi</a> 
@endsection()

@section('judul')
Organisasi Kemahasiswaan
@endsection()

@section('content')
@if(!$organisasi->isEmpty())
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            List of Organization</div>
<div class="card-body">
<a href="/adminorganisasi/create">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Tambah Organisasi</i>
</button></a>
@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

<br><br>
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
            <th>ID </th>
            <th>Nama OK / LK </th>
            <th>Tahun Berdiri </th>
            <th>Ketua OK / LK </th>
            <th>Kontak</th>
            <th colspan="3"> Action </th>
        </thead>
        <tbody>
            @foreach($organisasi as $org)
            <tr>
                <td>{{ $org->id }}</td>
                <td>{{ $org->nama_organisasi}}</td>
                <td>{{ $org->sejak}}</td>
                <td>{{ $org->ketua_organisasi}}</td>
                <td>{{ $org->kontak}}</td>
                <td><button onclick="window.location.href='adminorganisasi/show/{{$org->id}}'" class="btn btn-outline-info"><span><i class="fas fa-eye"></i> <a href=""></a></span></button></td>
                <td><button onclick="window.location.href='adminorganisasi/edit/{{$org->id}}'" class="btn btn-outline-success"><span><i class="fas fa-pencil-alt"></i></span></button></td>
                <td><button class="btn btn-outline-danger" data-toggle="modal" data-target="#modalHapus"><span><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></span></button></td>
            </tr>
            @endforeach
        </tbody>
    
</table>
<div class="center">
    {{$organisasi->links()}}
</div>

    </div>
</div>
</div>

<!-- Contoh Modal -->
<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSayaLabel">Konfirmasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah data ingin dihapus???
        <br/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
        <button onclick="window.location.href='adminorganisasi/delete/{{$org->id}}'" type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>
@else
<a href="/adminorganisasi/create">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Tambah Organisasi</i>
</button></a>
@endif

@endsection

