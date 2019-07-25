@extends('layouts.front')

@section('title', 'ছবি || আমার ইতিহাস')
<link href="{{asset('frontend/images/imagegallery.png')}}" rel="icon">
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
  <h2 class="headertwo" >ছবি</h2>
  @foreach($image as $data)


   <a  href="{{ URL::to('/uploads/archive/'.$data->media) }}" target="_blank"> <img class="images" src="{{ asset('uploads/archive/'.$data->media ) }} " style="width:100%;height:300px;max-width:300px" /> </a>
  


@endforeach

</div>
@endsection


