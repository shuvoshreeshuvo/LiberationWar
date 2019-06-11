@extends('layouts.front')

@section('title','Our History || Books')

@section('content')



    <div class="container">

        <div class="row">
            @foreach($book as $data)
                <div class="col-md-4">
                    <div class="books" style="margin-right: 25px;margin-bottom: 20px;">

                        <div class="hovereffect">
                            <a target="_blank" href="{{URL::asset('frontend/books/'.$data->path.'.pdf') }}">

                            <img class="img-responsive p-2" src="{{ asset('uploads/book/'.$data-> image) }}" alt="" width="300px" height="400px" > 
                            <div class="overlay">
                                <h2>{{ $data->title }}</h2>
                                <p class="lead text-light">{{ $data->caption }}</p>
                            </div></a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection