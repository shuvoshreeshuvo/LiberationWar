@extends('layouts.front')

@section('title', 'Our History || Audio')

@section('content')

<div class="container">
  <h3 style="text-align:center; color:red;" >অডিও</h3>
  @foreach($audio as $data)


    <div class="col-md-4">
                    
                            <a class="show" target="_blank" href="{{URL::asset('frontend/archive/audio/'.$data->path.'.mp4') }}">

                            gdhsgd
                            </a>
                        </div>

                    
  


@endforeach

</div>
@endsection

