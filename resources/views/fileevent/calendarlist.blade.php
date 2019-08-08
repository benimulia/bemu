
<div class="container">
		@foreach($events as $ev)
		<div class="row row-striped">
			@if ( $ev->tanggalAwal != $ev->tanggalAkhir)
				<div class="col-2 text-center">
					<h1 class="display-5"><span class="badge badge-secondary">{{date('d',strtotime($ev->tanggalAwal))}}</span></h1>
					<h4 >{{date('M',strtotime($ev->tanggalAkhir))}}</h2>
				</div> 
				
				<div class="col-2 text-center">
					<h1 class="display-5"><span class="badge badge-secondary">{{date('d',strtotime($ev->tanggalAkhir))}}</span></h1>
					<h4>{{date('M',strtotime($ev->tanggalAkhir))}}</h2>
				</div>
			@else
				<div class="col-4 text-right">
					<h1 class="display-5"><span class="badge badge-secondary">{{date('d',strtotime($ev->tanggalAwal))}}</span></h1>
					<h4>{{date('M',strtotime($ev->tanggalAwal))}}</h2>
				</div>
			@endif
			<div class="col-8">
				<h5 class="text-uppercase"><strong>{{str_limit($ev->nama,'16')}}</strong></h5>
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
				<p class="d-none" id="{{$ev->id}}">{{$ev->deskripsi}}</p>
				<p><a onclick="document.getElementById('{{$ev->id}}').classList.remove('d-none'); this.style.display='none'">Read more</a></p>
			</div>
		</div>
		@endforeach
		
	</div>