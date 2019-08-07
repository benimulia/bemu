@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminevents">Events</a> 
@endsection()

@section('judul')
Events
@endsection()

@section('content')
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
	        <th>Tanggal </th>
	        <th>Pukul </th>
	        <th>Sampai Pukul</th>
	        <th>Tempat</th>
	        <th>Deskripsi Event</th>
	        <th colspan="3"> Action </th>
	    </thead>
	    <tbody>
	    	
	    </tbody>
	</table>
	<div class="center">
    
	</div>
	</div>
</div>
</div>

<!-- <a href="/adminevents/create">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Tambah News</i>
</button></a> -->


@endsection
