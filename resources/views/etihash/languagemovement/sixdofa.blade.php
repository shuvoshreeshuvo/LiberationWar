@extends('layouts.front')

@section('title', 'Our History || Sixdofa')

@section('content')

<div class="container">
	<h1 style="text-align: center;color: red;">ছয় দফা আন্দোলন</h1>
   @foreach($sixdofa as $data)
   <div class="img">
   	<h2 style="text-align: center;color: red;">{{$data->title}}</h2>

      <img src={{ $data-> image }} />
    </div>
    <div class="content">   
       <p>{{ $data->content }}</p>
    </div>
@endforeach
</div>  
@endsection