@extends('layouts.front')

@section('title', 'Our History || Images')

@section('content')

<div class="container">
  <h3 style="text-align:center; color:red;" >ছবি</h3>
  @foreach($archive as $data)


   <a href={{ $data-> archive }}> <img class="images" src="{{ asset('uploads/archive/'.$data->archive ) }} " style="width:100%;max-width:300px" /> </a>
  


@endforeach

</div>
@endsection


