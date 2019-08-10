@extends('layouts.layout')

@section('nav')
@include('layouts.navbar')<!-- .site-navigation -->
@endsection

@section('bodyclass', 'single-page news-page')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Events</h1>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->

<div class="news-wrap">
    <div class="container">
        <div class="section-heading">
            <h2 class="entry-title">This Year</h2>
        </div>
        <div class="row">
<<<<<<< HEAD
            <div class="col-12 col-lg-8">
                @foreach($events as $n)
                <div class="news-content">
                    <a href="/events/{{$n->id}}"><img src="{{url('uploads/'.$n->foto)}}" alt="" weight="730px" height="377.58"></a>
=======
            <div class="col-12 col-lg-8 ">
>>>>>>> 347b7a24fff05996f83026e3dc1dc7522ef76163


                @foreach($events as $ev)

                
                <div class="row row-stripped">
                    
                    @if ( $ev->tanggalAwal != $ev->tanggalAkhir)
                        <div class="col-2 text-right">
                            <h1 class="display-5"><span class="badge badge-secondary">{{date('d',strtotime($ev->tanggalAwal))}}</span></h1>
                            <h4>{{date('M',strtotime($ev->tanggalAwal))}}</h4>
                        </div> 
                        
                        <div class="col-2 text-left">
                            <h1 class="display-5"><span class="badge badge-secondary">{{date('d',strtotime($ev->tanggalAkhir))}}</span></h1>
                            <h4>{{date('M',strtotime($ev->tanggalAkhir))}}</h4>
                        </div>
                    @else
                        <div class="col-4 text-center">
                            <h1 class="display-5"><span class="badge badge-secondary">{{date('d',strtotime($ev->tanggalAwal))}}</span></h1>
                            <h4>{{date('M',strtotime($ev->tanggalAwal))}}</h4>
                        </div>
                    @endif
                    <div class="col-8">
                        <h5 class="text-uppercase"><strong>{{$ev->nama}}</strong></h5>
                        <ul class="list-inline ">
                            <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i>
                                @if ( $ev->tanggalAwal != $ev->tanggalAkhir)
                                    {{date('D',strtotime($ev->tanggalAwal))}}-{{date('D',strtotime($ev->tanggalAkhir))}}
                                @else
                                    {{date('D',strtotime($ev->tanggalAwal))}}
                                @endif
                            </li>
                            <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 
                                {{$ev->jamAwal}}:{{$ev->menitAwal}} - 
                                @if($ev->jamAkhir == NULL || $ev->menitAkhir == NULL)
                                 Selesai
                                @else
                                 {{$ev->jamAkhir}}:{{$ev->menitAkhir}}
                                @endif
                            </li>
                            @if($ev->tempat != NULL)
                                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i>{{$ev->tempat}}</li>
                            @endif
                        </ul>
                        <p  id="{{$ev->id}}">{{$ev->deskripsi}}</p>
                    </div>
                <hr>
                
                </div>
                @endforeach
            </div>

            @include('layouts.sidebar')
        </div>
    </div>
</div>

@endsection