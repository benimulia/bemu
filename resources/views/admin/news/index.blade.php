@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminnews">News</a> 
@endsection()

@section('judul')
News
@endsection()

@section('content')

<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            List of News</div>
<div class="card-body">
<a href="/adminnews/create">
<button class="btn btn-info" id="sidebarToggle">
    <i class="far fa-plus-square"> Tambah News</i>
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
            <th>Penulis </th>
            <th>Isi </th>
            <th>Waktu Buat</th>
            <th colspan="3"> Action </th>
        </thead>
        <tbody>
            @foreach($news as $nw)
            <tr>
                <td>{{ $nw->id }}</td>
                <td>{{ $nw->judul}}</td>
                <td>{{ $nw->keterangan}}</td>
                <td>{{ $nw->isi}}</td>
                <td>{{ date('d M Y - H:i:s', $nw->created_at->timestamp) }}</td>
                <td><a href="adminnews/show/{{$nw->id}}">Show </a></td>
                <td><a href="adminnews/edit/{{$nw->id}}">Edit </a></td>
                <td><a href="adminnews/delete/{{$nw->id}}">Delete </a></td>
            </tr>
            @endforeach
        </tbody>
    
</table>
<div class="center">
    {{$news->links()}}
</div>

    </div>
</div>
</div>



@endsection