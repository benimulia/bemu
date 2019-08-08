@extends('layouts.adminlayout')

@section('breadcrumb')
<a href="/adminevents">Events</a> / Detail Event
@endsection()

@section('judul')
Detail Events
@endsection()

@section('content')
<div class="container">
<span> <a href="/adminevents">&#8592 Kembali</a></span>
<div class="card mb-3">
          <div class="card-header">
            <h3>Judul : <b>{{$events['nama']}}</b></h3><br/>
            <h6>Penulis : {{$events['pembuat']}}</h6>
            <h6>Tempat : {{$events['tempat']}} </h6>
            <h6>Tanggal Event : 
              @if ($events['tanggalAwal'] != $events['tanggalAkhir'])
           		   {{ date( 'd M Y' ,strtotime($events['tanggalAwal'])) - date( 'd M Y',strtotime($events['tanggalAkhir']))}}
            	@else
           		   {{ date('d M Y',strtotime($events['tanggalAkhir']))}}
             	@endif
           	</h6>
            <h6>Pukul :
              {{$events['jamAwal']}}:{{$events['menitAwal']}} - 
              @if ($events['jamAkhir'] == NULL || $events['menitAkhir'] == NULL)
                Selesai
              @else
                {{$events['jamAkhir']}}:{{$events['menitAkhir']}}
              @endif
            </h6>
            <h6>Deskripsi Event : {{$events['deskripsi']}} </h6>

    </div>  
</div>
@endsection()
