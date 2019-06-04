@extends('layouts.front')

@section('title','Our History || Freedom_Fighter')

@section('content')

<div class="container">
  
  <h1 style="text-align: center;color: red;">{{ $freedom_fighter->nickname }}</h1>
   
   <div class="img">
      <img style="height:300px;width:300px" class="rounded float-right"  src="{{ asset('/uploads/FreedomFighter/'.$freedom_fighter->image) }}" />
    </div>
    <div class="content">   
       <p>{!! $freedom_fighter->content !!}</p>
    </div>

</div> 
@endsection 

