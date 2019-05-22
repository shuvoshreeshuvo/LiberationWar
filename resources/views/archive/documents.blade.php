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

    @foreach($document as $data)

      <a href={{ $data-> path }}><img  class="images" src="{{ $data-> path }}" style="width:100%;max-width:300px" /> </a>

    @endforeach
</div>
@endsection