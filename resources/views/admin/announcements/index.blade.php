@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminannouncements">Announcements</a> 
@endsection()

@section('judul')
Announcements
@endsection()

@section('content')
@if(!$announcements->isEmpty())
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            List of Announcements</div>
<div class="card-body">
<a href="/adminannouncements/create">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Tambah Announcements</i>
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
            <th>Judul </th>
            <th>Isi </th>
            <th>Waktu Buat</th>
            <th colspan="3"> Action </th>
        </thead>
        <tbody>
            @foreach($announcements as $an)
            <tr>
                <td>{{ $an->id }}</td>
                <td>{{ $an->judul}}</td>
                <td>{!!Str::words($an->isi, 50 , '...')!!}</td>
                <td>{{ date('d M Y - H:i:s', $an->created_at->timestamp) }}</td>
                <td><button onclick="window.location.href='adminannouncements/show/{{$an->id}}'" class="btn btn-outline-info"><span><i class="fas fa-eye"></i> <a href=""></a></span></button></td>
                <td><button onclick="window.location.href='adminannouncements/edit/{{$an->id}}'" class="btn btn-outline-success"><span><i class="fas fa-pencil-alt"></i></span></button></td>
                <td><button class="btn btn-outline-danger" data-toggle="modal" data-target="#modalHapus"><span><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></span></button></td>
            </tr>
            @endforeach
        </tbody>
    
</table>
<div class="center">
    {{$announcements->links()}}
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
        <button onclick="window.location.href='adminannouncements/delete/{{$an->id}}'" type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>
@else
<a href="/adminannouncements/create">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Tambah Announcements</i>
</button></a>
@endif

@endsection