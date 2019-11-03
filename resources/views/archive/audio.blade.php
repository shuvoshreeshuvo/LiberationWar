@extends('layouts.front')

@section('title', 'অডিও || আমার ইতিহাস')
<link href="{{asset('frontend/images/audio.png')}}" rel="icon">

@section('content')

<div class="container">
  <h2 class="headertwo" >অডিও</h2>
{{--
  @foreach($audio as $data)
        <h5 class="headerfive">{{ $data->title }}</h5>
        <div class="col-md-4">

        <audio controls> <source  src="{{ asset('frontend/archive/audio/'.$data->path) }}" type="audio/mpeg"></audio>
    </div>

@endforeach --}}
            <div class="col-md-12">
                @foreach($audio as $data)
                <div class="audio-list">
                    <ul id="audio_container">

                        <li>
                            <div class="audio-play-list-wrap-right">

                                <div class="audio-play-list-wrap-thumb">

                                    <img src="{{ asset('/uploads/audimg/'.$data->audimg)}}">

                                </div>

                                <div class="audio-play-list">
                                    <div class="audio-play-title">

                                        <h3> {{ $data->title }} </h3>
                                        <div class="audio-play-share">

                                                <a class="audio-play-icon play" href="{{ asset('frontend/archive/audio/'.$data->path) }}" type="audio/mp3"></a>

                                            <div class="audio-play-share-inner">
                                                <ul>
                                                    <li><span>&nbsp;</span></li>
                                                    <!--<li><span>শেয়ার করুন:</span></li>-->
                                                    <!--                                        <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                                                            <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                                                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                                                            <li><a class="google-plus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                                                            <li><a class="pinterest" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                                                            <li><a class="share"  href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>-->
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <span class="audio-play-time">{{$data->audduratn}}</span>


                                </div>
                            </div>

                        </li>
                    </ul>

                </div>
                @endforeach
            </div>

</div>
@endsection

