@extends('layouts.front')

@section('title', 'অডিও || আমার ইতিহাস')
<link href="{{asset('frontend/images/audio.png')}}" rel="icon">
<style>
    .audio-list {
        margin: 35px auto 40px;
        overflow: hidden;

    }
    ul, ol, li {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .audio-list ul li {
        border:#A9A9A9;
        overflow: hidden;
        margin-bottom: 8px;
        -webkit-transition: all 700ms ease;
        -moz-transition: all 700ms ease;
        -ms-transition: all 700ms ease;
        -o-transition: all 700ms ease;
        transition: all 700ms ease;
        padding: 6px 0 8px 8px;
    }

    .audio-play-list-wrap-right .audio-play-list-wrap-thumb {
        background: rgba(0, 0, 0, 0) url(http://bangabandhumuseum.org.bd/assets/media/audio/thumb/1488887110.jpg) repeat scroll center top;
        float: left;
        height: 107px;
        margin-right: 16px;
        width: 98px;
        overflow: hidden;


    }
    .audio-play-list-wrap-right {


    }

    .audio-play-list {
        background: #fff none repeat scroll 0 0;
        display: block;
        overflow: hidden;
        padding: 15px 12px 20px;
        position: relative;
    }

    .audio-play-time {
        color: #a8a8a8;
        float: right;
        font-size: 24px;
        line-height: 24px;
        position: absolute;
        right: 30px;
        top: 16px;
    }
    .audio-play-title a {
        background-color: transparent !important;
        color: #111 !important;
        font-size: 24px;
        font-weight: 400;
    }
    .audio-play-share {
        background: #A9A9A9;
        display: block;
        /*padding: 15px 15px 4px;*/
        text-align: right;
    }
    .audio-play-icon {
        background:  url(../frontend/images/play-arrow.png) no-repeat scroll center 5px;
        color: red;
        float: left;
        height: 26px;
        margin-right: 30px;
        width: 17px;
        cursor: pointer;
        padding: 15px 15px 4px;
        overflow: hidden;
        text-indent: 99px;
    }
</style>
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

