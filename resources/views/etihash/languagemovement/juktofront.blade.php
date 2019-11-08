@extends('layouts.front')

@section('title', 'Our History || Juktofront')

@section('content')

<div class="container">

	<h1 style="text-align: center;color: red;">যুক্তফ্রণ্ট</h1>
   @foreach($juktofront as $data)
   <div class="img">
   	<h4 style="text-align: left;color: red;">{{$data->title}}</h4>
      <img src={{ $data-> image }} />
    </div>
    <div class="content">   
       <p>{{ $data->content }}</p>
    </div>
@endforeach
</div>  
@endsection