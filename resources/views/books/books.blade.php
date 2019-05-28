@extends('layouts.front')

@section('title','Our History || Books')

@section('content')



<div class="container">
    <div class="row">
        @foreach($book as $data)
        <div class="col-md-4">
            <div class="books" style="margin-right: 25px;margin-bottom: 20px;">
                <div class="book">
                    {{--<h4 style="text-align: center;color: red;">{{$data->title}}</h4>--}}
                    <a target="_blank" href="{{URL::asset('frontend/books/'.$data->path.'.pdf') }}">
                    <img class="bookimages" src="{{ asset('uploads/book/'.$data-> image) }}" /></a>
                  <div class="caption">
                    <div class="blur"></div>
                    <div class="caption-text" style="margin-top: 20px;">
                       {{-- <h1>{{ $data->title }}</h1> --}}
                        <p>{!! $data->caption !!}</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


 @endsection




