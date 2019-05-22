@extends('layouts.front')

@section('title', 'Our History || IndiaPakistanjuddho')

@section('content')

<div class="container">
	<h1 style="text-align: center;color: red;">
ভারত-পাকিস্তান যুদ্ধ</h1>
	 @foreach($indiapakistanjuddho as $data)
   <div class="img">
    <h4 style="text-align: left;color: red;">{{$data->title}}</h4>
      <img src={{ $data-> image }} />
    </div>
  <div class="content"> 
     <p>{{ $data->content }}</p>
    </div>
   <!--<br><br><br><hr>-->
@endforeach
</div>  
@endsection