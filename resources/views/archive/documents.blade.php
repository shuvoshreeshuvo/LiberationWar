@extends('layouts.front')

@section('title', 'ছবি || আমার ইতিহাস')
<link href="{{asset('frontend/images/imagegallery.png')}}" rel="icon">
@section('content')
    <div class="container">
        <h2 class="headertwo" >ডকুমেন্ট </h2>
        {{--@foreach($image as $data)


         <a  href="{{ URL::to('/uploads/archive/'.$data->media) }}" target="_blank"> <img class="images" src="{{ asset('uploads/archive/'.$data->media ) }} " style="width:100%;height:300px;max-width:300px" /> </a>



      @endforeach--}}
        <div class="row">
            @foreach($document as $data)
                <div class="col-md-4">
                    <div class="images">
                        <div class="imagehovereffect">
                            <a class="show" target="_blank" href="{{ asset('/uploads/archive/'.$data->media)}}">

                                <img class="allimage"
                                     class="img-responsive p-2" src="{{ asset('/uploads/archive/'.$data->media) }}" alt="" >
                                <div class="overlay">
                                    <p class="description">{!! $data->description !!}</p>
                                </div></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection


