@extends('layouts.front')

@section('title', 'অডিও || আমার ইতিহাস')
<link href="{{asset('frontend/images/audio.png')}}" rel="icon">

@section('content')

<div class="container">
  <h2 class="headertwo" >অডিও</h2>

  @foreach($audio as $data)

    <div class="col-md-4">
                    
        <audio controls> <source  src="{{ asset('frontend/archive/audio/'.$data->path) }}" type="audio/mpeg"></audio>
    </div>

@endforeach

</div>
@endsection

