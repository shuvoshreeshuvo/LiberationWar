@extends('layouts.front')

@section('title', 'Our History || Brief')

@section('content')

<div class="container">
	<h1 style="text-align: center;color: red;">{{ $event->title }} ( {{ $event->year }} )</h1>
   
   <div class="img">
      <img src="{{ asset('/uploads/event/'.$event->image) }}" />
    </div>
    <div class="content">   
       <p>{!! $event->content !!}</p>
    </div>

</div> 
@endsection 
