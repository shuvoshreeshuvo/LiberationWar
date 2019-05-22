@extends('layouts.front')

 @section('title','Our History || Bongobondu')

@section('content')

<div class="container bongobondu ">
	<h1 style="text-align: center;color: red;">বঙ্গবন্ধু শেখ মুজিবুর রহমান</h1>
	@foreach($bongobondu as $data)
 		<div class="img">
 			<h3 style="color: red;">{{ $data->title }}</h3>
      <h2 style="text-align: left;color: red;">{{ $data->subtitle }}</h2>
      		<img style="height: 300px;width: 300px" class="rounded float-right" src="{{ asset('uploads/bongobondu/'.$data-> image) }}"/>
    	</div>

    	<div style="text-align: left;color: Black;" class="content">
       		{!! $data->content !!}
		</div>
    @endforeach

<!-- CK Editor -->

    <!-- <form action="#" method="post">
    	{{csrf_field()}}
    	<textarea></textarea>
    </form> -->

</div>

@endsection