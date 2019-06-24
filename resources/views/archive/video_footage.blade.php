@extends('layouts.front')

@section('title', 'Our History || Videos')

@section('content')
<div class="container">
	<h3 class="header" >ভিডিও তালিকা</h3>
	<div class="row">
		<div class="col-md-6">

   			@foreach($Videofootage as $data)
   		<div class="videogallery">

				<iframe width="450" height="300" src="{{ $data->media }} " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<h4 class="videoTitle">{{ $data->description }}</h4>
      	</div>

   			@endforeach

       </div>
   </div>
</div>
@endsection