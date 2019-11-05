@extends('layouts.front')

@section('title','ক্যাটাগরিভিত্তিক বইয়ের তালিকা || আমার ইতিহাস')

@section('content')

    <div class="container">

        <div class="row">
            @foreach($book as $data)

                <div class="col-md-3">
                    <div class="books">
                        @if($data->type=='pdf')
                            <div class="bookhovereffect">
                                <a class="show" target="_blank" href="{{URL::asset('frontend/books/'.$data->path.'.pdf') }}">

                                    <img class="bookimage"
                                         class="img-responsive p-2" src="{{ asset('uploads/book/'.$data-> image) }}" alt="" width="300px" height="400px" >
                                    <div class="overlay">
                                        <h2 class="title">{{ $data->title }}</h2>
                                        <p class="caption">{!! $data->caption !!}</p>
                                    </div></a>
                            </div>
                        @else
                            <div class="bookhovereffect">
                                <a class="show" target="_blank" href="{{ $data->path }}">

                                    <img class="bookimage"
                                         class="img-responsive p-2" src="{{ asset('uploads/book/'.$data-> image) }}" alt="" width="300px" height="400px" >
                                    <div class="overlay">
                                        <h2 class="title">{{ $data->title }}</h2>
                                        <p class="caption">{!! $data->caption !!}</p>
                                    </div></a>
                            </div>


                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection



