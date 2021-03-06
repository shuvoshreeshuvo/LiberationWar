@extends('layouts.front')

@section('title') 
{{ __('header.bongobondhu') }}{{ __('header.title') }}{{ __('header.logo') }}

@endsection

@section('content')

<div class="container bongobondu ">
	<h2 class="headertwo">বঙ্গবন্ধু শেখ মুজিবুর রহমান</h2>
	
	@foreach($bongobondu as $data)
		<h5 class="headerfive bongobondhu">{{ $data->title }}</h5>
		<h4 style="text-align: left;color: red;">{{ $data->subtitle }}</h4>
		@if($data->image)
 		<div class="img">
      		<img style="height: 300px;width: 300px" class="rounded float-right" src="{{ asset('uploads/bongobondu/'.$data-> image) }}"/>
    	</div>
		@else
		
		@endif
    	<div style="text-align: left;color: black;" class="content">
       		{!! $data->content !!}
		</div>
    @endforeach

</div>

@endsection