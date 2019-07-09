@extends('layouts.front')

@section('title', 'Our History || Documents')

@section('content')
<style>
  .images{
    border: 10px solid #fff;
    -webkit-box-shadow: 5px 5px 5px #111;
    box-shadow: 5px 5px 5px #111;
  }
  .images:hover{
    -webkit-filter: opacity(30%);
  }
</style>
<div class="container">
   <h2 class="headertwo">ডকুমেন্টস</h2>
    @foreach($document as $data)

      <a href="{{ URL::to('/uploads/archive/'.$data->media) }}" target="_blank"><img  class="images" src="{{ asset('uploads/archive/'.$data->media) }}" style="width:100%;height:300px;max-width:300px" /> </a>

    @endforeach
</div>
@endsection