@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminevents">Events</a> 
@endsection()

@section('judul')
Events
@endsection()

@section('content')
@if(!$events->isEmpty())
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            List of Events</div>
<div class="card-body">
<a href="/adminevents/create">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Tambah Event</i>
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
	    	<th>Pembuat </th>
	        <th>Nama Events </th>
	        <th>Tanggal Mulai </th>
	        <th>Tanggal Selesai </th>
	        <th>Pukul </th>
	        <th>Sampai Pukul</th>
	        <th>Tempat</th>
	        <th>Deskripsi Event</th>
	        <th>Tanggal dibuat</th>
	        <th colspan="3"> Action </th>
	    </thead>
	    <tbody>
	    	@foreach($events as $nw)
            <tr>
                <td>{{ $nw->id }}</td>
                <td>{{ $nw->pembuat}}</td>
                <td>{{ $nw->nama}}</td>
                <td>{{date('d M Y',strtotime($nw->tanggalAwal))}}</td>
                <td>{{date('d M Y',strtotime($nw->tanggalAkhir))}}</td>
                <td>{{$nw->jamAwal}}:{{$nw->menitAwal}}</td>
                <td>{{$nw->jamAkhir}}:{{$nw->menitAkhir}}</td>
                <td>{!!Str::words($nw->tempat, 50 , '...')!!}</td>
                <td>{!!Str::words($nw->deskripsi, 50 , '...')!!}</td>
                <td>{{ date('d M Y - H:i:s', $nw->created_at->timestamp) }}</td>
                <td><button onclick="window.location.href='adminevents/show/{{$nw->id}}'" class="btn btn-outline-info"><span><i class="fas fa-eye"></i> <a href=""></a></span></button></td>
                <td><button onclick="window.location.href='adminevents/edit/{{$nw->id}}'" class="btn btn-outline-success"><span><i class="fas fa-pencil-alt"></i></span></button></td>
                <td><button class="btn btn-outline-danger" data-toggle="modal" data-target="#modalHapus"><span><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></span></button></td>
            </tr>
            @endforeach
	    </tbody>
	</table>
	<div class="center">
    
	</div>
	</div>
</div>
</div>

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
        <button onclick="window.location.href='adminevents/delete/{{$nw->id}}'" type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>
@else
<a href="/adminevents/create">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Tambah Events</i>
</button></a>
@endif

@endsection
