@extends('layouts.front')

@section('title', 'অডিও || আমার ইতিহাস')


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

                                    <img src="{{ asset('/uploads/audimg/'.$data->audimg)}}" width="`150" height="110">

                                </div>

                                <div class="audio-play-list">
                                    <div class="audio-play-title">

                                        <h3> {{ $data->title }} </h3>
                                        <div class="audio-play-share">

                                                <a class="audio-play-icon play" href="{{ asset('frontend/archive/audio/'.$data->path) }}" ></a>

                                            <div class="audio-play-share-inner">
                                                <ul>
                                                    <li><span>&nbsp;</span></li>
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

