@extends('layouts.front')

@section('title','Our History || Freedom Fighter')

@section('content')

<div class="container" style="margin-top:100px; ">
  
  <h1 style="text-align: center;color: red;">{{ $freedom_fighter->name }}</h1>
   
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
