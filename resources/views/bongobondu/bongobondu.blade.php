@extends('layouts.front')

@section('title') 
{{ __('header.bongobondhu') }}{{ __('header.title') }}{{ __('header.logo') }}

@endsection
<link href="{{asset('frontend/images/bongobondhu.png')}}" rel="icon">

@section('content')

<div class="container bongobondu ">
	<h2 class="headertwo">বঙ্গবন্ধু শেখ মুজিবুর রহমান</h2>
	
	@foreach($bongobondu as $data)
		<h3 style="color: red;">{{ $data->title }}</h3>
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