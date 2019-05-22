@extends('layouts.front')

@section('title', 'Our History || Images')

@section('content')

<style>
    .images{
        border: 10px solid #fff;
        transition: transform 0.3s, filter 0.5s ease-in-out;
        transform-origin: center center;
    }
    .images:hover{

        filter: brightness(100%);
        transform: scale(1.3);
        text-decoration: none;
    }
</style>

<div class="container">
  <h3 style="text-align:center; color:red;" class="m-4">ছবি</h3>
  @foreach($image as $key=>$data)
    <a href={{ $data-> image }}><img class="images" src={{ $data-> image }} style="width:100%;max-width:300px" /> </a>

@endforeach

</div>
@endsection


