@extends('layouts.front')

@section('title','Our History || Books')

@section('content')



<div class="container">
    <div class="row">
        @foreach($book as $data)
            <div class="books">
                <div class="book">
                    <h2 style="text-align: center;color: red;">{{$data->title}}</h2>
                    <a href="{{URL::asset('public/frontend/books/'.$data-> path) }}">
                    <img class="bookimages" src="{{ asset('uploads/book/'.$data-> image) }}" /></a>
                    <div class="overlay">
    <div class="text">Hello World</div>
  </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


 @endsection




