<?php 
$month = date('m');
$months = date('F');
$check = false;
 ?>
<a class="b"href="/events"><h2>Events ({{$months}})</h2></a>
<hr>
 <div class="container">
<ul class="p-0">
    @foreach($events as $ev)
    @if ($month == date('m',strtotime($ev->tanggalAwal)))
    <?php 
        $check = true;
     ?>
     <li class="">
    <div class="row row-stripped">
        
       <!--  @if ( $ev->tanggalAwal != $ev->tanggalAkhir)
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
        @endif -->
        <div class="col-12">
            <h3 class="text-uppercase"><strong>{{substr($ev->nama,0,20)}}@if(strlen($ev->nama)>=16)...@endif</strong></h3>
            <div class=" d-flex flex-wrap align-items-center">
                <i class="fa fa-fw fa-calendar-o" aria-hidden="true"></i>
                    @if ( $ev->tanggalAwal != $ev->tanggalAkhir)
                        {{date('d',strtotime($ev->tanggalAwal))}}-{{date('d',strtotime($ev->tanggalAkhir))}}
                    @else
                        {{date('d',strtotime($ev->tanggalAwal))}}
                    @endif
                
                <i class="fa fa-fw fa-clock-o" aria-hidden="true"></i> 
                    {{$ev->jamAwal}}:{{$ev->menitAwal}} - 
                    @if($ev->jamAkhir == NULL || $ev->menitAkhir == NULL)
                     Selesai
                    @else
                     {{$ev->jamAkhir}}:{{$ev->menitAkhir}}
                    @endif
                
                @if($ev->tempat != NULL)
                    <i class="fa fa-fw fa-location-arrow" aria-hidden="true"></i>{{$ev->tempat}}
                @endif
            </div>
            <p  class ="d-none text-dark" id="{{$ev->id}}">{{$ev->deskripsi}}</p>
            @if($ev->deskripsi != NULL)
            <p><a onclick="document.getElementById('{{$ev->id}}').classList.remove('d-none'); this.style.display='none'">Read more</a></p>
            @endif
        </div>
        
    <hr>
    
    </div>
    </li>
    <hr>
    @endif  
    @endforeach
    @if(!$check)
        <h3>Tidak ada event di bulan ini</h3>
    @endif

    
</ul>
</div>
