@extends('layouts.front')

@section('title', 'Our History |Protikria')

@section('content')

<div class="container">
	<h1 style="text-align: center;color: red;">বৈদেশিক প্রতিক্রিয়া
</h1>
	 @foreach($protikria as $data)
   
     <div class="img">
      <h4 style="text-align: left;color: red;">{{$data->title}}</h4>
      @if($data-> image)
        <img src={{ $data-> image }} />
      @endif
      </div>
    
  <div class="content"> 
     <p>{{ $data->content }}</p>
    </div>
   <!--<br><br><br><hr>-->
@endforeach
</div>  
@endsection

