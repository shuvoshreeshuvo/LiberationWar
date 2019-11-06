@extends('layouts.front')

@section('title','মুক্তিযোদ্ধার সংক্ষিপ্ত জীবনী || আমার ইতিহাস')

@section('content')

<div class="container ">
	<h4 class="headerfour">{{ $freedom_fighter->name }}</h4>
  <h5 class="headerfive">{{ $freedom_fighter->name }}</h5>
   
   	@if($freedom_fighter->image)
   		<div class="img">
      		<img style="height:300px;width:300px" class="rounded float-right"  src="{{ asset('/uploads/freedom_fighter/'.$freedom_fighter->image) }}" />
    	</div>
    	@else
    @endif
    <div class="content ">   
    	@if($freedom_fighter->content)
       		<p>{!! $freedom_fighter->content !!}</p>
        @else
       		<p>No data found.</p>
        @endif
    </div>

</div> 
@endsection 
