@extends('layouts.front')

@section('title', 'Our History || Videos')

@section('content')
<div class="container">


   {{--<div class="videos">--}}

   	@foreach($Videofootage as $data)

   		<div class="video">
   			<iframe width="560" height="315" src="{{ $data->media }} " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      	</div>

   	@endforeach

 {{--  </div> --}}

</div>
@endsection