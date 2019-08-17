@extends('layouts.front')

@section('title', 'ছবি || আমার ইতিহাস')
<link href="{{asset('frontend/images/imagegallery.png')}}" rel="icon">
@section('content')
<style>
    .images{

        margin: 20px 0px 40px 15px;
    }

 .imagehovereffect {
     width: 100%;
     height: 100%;
     float: left;
     overflow: hidden;
     position: relative;
     text-align: center;
     cursor: default;
 }
 .imagehovereffect .overlay {
     width: 100%;
     height: 100%;
     position: absolute;
     overflow: hidden;
     top: 0;
     left: 0;
     opacity: 0;
     background-color: rgba(0, 0, 0, 0.5);
     -webkit-transition: all .4s ease-in-out;
     transition: all .4s ease-in-out
 }
 .imagehovereffect .allimage {
     display: block;
     position: relative;
     -webkit-transition: all .4s linear;
     transition: all .4s linear;
     width: 100%;
     height: 200px;
 }

 .imagehovereffect .show.info {
     text-decoration: none;
     display: inline-block;
     text-transform: uppercase;
     color: #fff;
     border: 1px solid #fff;
     background-color: transparent;
     opacity: 0;
     filter: alpha(opacity=0);
     -webkit-transition: all .2s ease-in-out;
     transition: all .2s ease-in-out;
     margin: 50px 0 0;
     padding: 7px 14px;
 }

 .imagehovereffect .show.info:hover {
     box-shadow: 0 0 5px #fff;
 }

 .imagehovereffect:hover .bookimage{
     -ms-transform: scale(1.2);
     -webkit-transform: scale(1.2);
     transform: scale(1.2);
 }

 .imagehovereffect:hover .overlay {
     opacity: 1;
     filter: alpha(opacity=100);
 }

 .imagehovereffect:hover .title, .imagehovereffect:hover .show.info {
     opacity: 1;
     filter: alpha(opacity=100);
     -ms-transform: translatey(0);
     -webkit-transform: translatey(0);
     transform: translatey(0);
 }

 .imagehovereffect:hover .show.info {
     -webkit-transition-delay: .2s;
     transition-delay: .2s;
 }


</style>

<div class="container">
  <h2 class="headertwo" >ছবি</h2>
  {{--@foreach($image as $data)


   <a  href="{{ URL::to('/uploads/archive/'.$data->media) }}" target="_blank"> <img class="images" src="{{ asset('uploads/archive/'.$data->media ) }} " style="width:100%;height:300px;max-width:300px" /> </a>



@endforeach--}}
    <div class="row">
    @foreach($image as $data)
    <div class="col-md-4">
        <div class="images">
    <div class="imagehovereffect">
        <a class="show" target="_blank"href="{{ URL::to('/uploads/archive/'.$data->media) }}">

            <img class="allimage"
                 class="img-responsive p-2" src="{{ asset('/uploads/archive/'.$data->media) }}" alt="" >
            <div class="overlay">
                <h2 class="title">{{ $data->title }}</h2>
                <p class="description">{!! $data->description !!}</p>
            </div></a>
    </div>
        </div>
        </div>
        @endforeach

</div>
</div>
@endsection


