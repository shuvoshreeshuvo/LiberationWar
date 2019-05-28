@extends('layouts.front')

@section('title', 'Our History || Images')

@section('content')

<div class="container">
  <h3 style="text-align:center; color:red;" >ছবি</h3>
  @foreach($image as $key=>$data)
    <a href={{ $data-> image }}><img class="images" src={{ $data-> image }} style="width:100%;max-width:300px" /> </a>

@endforeach

</div>
@endsection


