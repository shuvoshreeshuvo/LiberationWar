@extends('layouts.front')

@section('title', 'Our History || Audio')

@section('content')

<div class="container">
  <h3 style="text-align:center; color:red;" >অডিও</h3>
  @foreach($audio as $data)


    <div class="col-md-4">
                    
                            <audio controls> <source  src="{{ asset('frontend/archive/audio/'.$data->path) }}" type="audio/mpeg"></audio>
                        </div>

                    
  


@endforeach

</div>
@endsection

