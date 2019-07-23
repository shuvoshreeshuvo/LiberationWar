@extends('layouts.front')

@section('title', 'Our History || Audio')

@section('content')

<div class="container">
  <h2 class="headertwo" >অডিও</h2>
    <h5 class="headerfive"> {{ $data->title }} </h5>
  @foreach($audio as $data)

    <div class="col-md-4">
                    
        <audio controls> <source  src="{{ asset('frontend/archive/audio/'.$data->path) }}" type="audio/mpeg"></audio>
    </div>

@endforeach

</div>
@endsection

