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
                <h1>Contact</h1>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->
<div class="news-wrap">
    <div class="container">
    	<div class="row">
			<div class="col-12 col-lg-8">
		    	<div class="section-heading" >
		            <h2 class="entry-title">Contact</h2>
		        </div>
		        <ul style="list-style : none;" class="">
		            <li><i class="fa fa-fw fa-phone"></i><span>+62 882 1615 2324</span></li>
		            <li><i class="fa fa-fw fa-envelope"></i><span>bemu@students.ukdw.ac.id</span></li>
		            <li><i class="fa fa-fw fa-instagram"></i><span>bem.ukdw</span></li>
		            <li><i class="fa fa-fw fa-facebook"></i><span>BEM UKDW</span></li>
		            <li><i class="fa fa-fw fa-wechat"></i><span>@bgy7965l</span></li>

		        </ul>
		        <hr>

				<div class="section-heading">
			        <h2 class="entry-title">Feedback</h2>
			    </div>

			    {!! Form::open(['route'=>'contact.store']) !!}
				<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
				{!! Form::label('Nama:') !!}
				{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
				<span class="text-danger">{{ $errors->first('name') }}</span>
				</div>
				<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
				{!! Form::label('Email:') !!}
				{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
				<span class="text-danger">{{ $errors->first('email') }}</span>
				</div>
				<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
				{!! Form::label('Pesan:') !!}
				{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
				<span class="text-danger">{{ $errors->first('message') }}</span>
				</div>
				<div class="form-group">
					<button class="border-white text-white btn btn-md btn-success">Submit</button>
				</div>
			</div>
			
			
			@include('layouts.sidebar')
			
		</div>


	</div>
</div>
@endsection