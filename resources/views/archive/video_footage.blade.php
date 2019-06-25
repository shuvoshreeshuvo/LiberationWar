@extends('layouts.front')

@section('title', 'Our History || Videos')

@section('content')
<div class="container">
	<h3 class="header" >ভিডিও তালিকা</h3>
	<div class="row">
		

   			@foreach($Videofootage as $data)
        <div class="col-md-6">
   		<div class="videogallery">

				<iframe width="450" height="300" src="{{ $data->media }} " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<h4 class="videoTitle">{{ $data->description }}</h4>
      	</div>
      </div>
   			@endforeach

       
   </div>
</div>
@endsection