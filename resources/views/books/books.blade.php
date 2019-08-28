@extends('layouts.front')

@section('title','বই || আমার ইতিহাস')
<link href="{{asset('frontend/images/book.png')}}" rel="icon">
@section('content')

    <div class="container">
        <h3 class="headerthree">মুক্তিযুদ্ধ-ভিত্তিক বইসমূহের তালিকা</h3>
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



