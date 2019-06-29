@extends('layouts.front')

@section('title','Our History || Books')

@section('content')
<style>
   
   .books{
    float: left;
   }

.bookhovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
}

.bookhovereffect .overlay {
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

.bookhovereffect .bookimage {
    display: block;
    position: relative;
    -webkit-transition: all .4s linear;
    transition: all .4s linear;
}

.bookhovereffect .title {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 17px;
    background: rgba(0, 0, 0, 0.6);
    -webkit-transform: translatey(-100px);
    -ms-transform: translatey(-100px);
    transform: translatey(-100px);
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    padding: 10px;
}

.bookhovereffect .show.info {
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

.bookhovereffect .show.info:hover {
    box-shadow: 0 0 5px #fff;
}

.bookhovereffect:hover .bookimage{
    -ms-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
}

.bookhovereffect:hover .overlay {
    opacity: 1;
    filter: alpha(opacity=100);
}

.bookhovereffect:hover .title, .bookhovereffect:hover .show.info {
    opacity: 1;
    filter: alpha(opacity=100);
    -ms-transform: translatey(0);
    -webkit-transform: translatey(0);
    transform: translatey(0);
}

.bookhovereffect:hover .show.info {
    -webkit-transition-delay: .2s;
    transition-delay: .2s;
}

</style>



    <div class="container">

        <div class="row">
            @foreach($book as $data)
                @if($data->path=='pdf')

                <div class="col-md-4">
                    <div class="books" style="margin-right: 25px;margin-bottom: 20px;">

                        <div class="bookhovereffect">
                            <a class="show" target="_blank" href="{{URL::asset('frontend/books/'.$data->path.'.pdf') }}">

                            <img class="bookimage"
                            class="img-responsive p-2" src="{{ asset('uploads/book/'.$data-> image) }}" alt="" width="300px" height="400px" >
                            <div class="overlay">
                                <h2 class="title">{{ $data->title }}</h2>
                                <p class="caption">{!! $data->caption !!}</p>
                            </div></a>
                        </div>

                    </div>
                </div>

                @else

                    <div class="col-md-4">
                        <div class="books" style="margin-right: 25px;margin-bottom: 20px;">

                            <div class="bookhovereffect">
                                <a class="show" target="_blank" href="{{ $data->path }}}">

                                    <img class="bookimage"
                                         class="img-responsive p-2" src="{{ asset('uploads/book/'.$data-> image) }}" alt="" width="300px" height="400px" >
                                    <div class="overlay">
                                        <h2 class="title">{{ $data->title }}</h2>
                                        <p class="caption">{!! $data->caption !!}</p>
                                    </div></a>
                            </div>

                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


@endsection