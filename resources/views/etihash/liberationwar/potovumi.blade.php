@extends('layouts.front')

@section('title', 'Our History || Potovumi')

@section('content')

<div class="container">
	<h1 style="text-align: center;color: red;">পটভূমি</h1>
	 @foreach($potovumi as $data)
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