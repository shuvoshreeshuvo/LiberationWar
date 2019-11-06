@extends('layouts.front')

@section('title', 'মুক্তিযোদ্ধা || আমার ইতিহাস')

@section('content')

<div class="container">
    <h4 class="headerfour">বাংলাদেশের স্বাধীনতা যুদ্ধের খেতাবপ্রাপ্ত মুক্তিযোদ্ধা</h4>


     @foreach($ff_titles as $ff_title)    
     <div class="intro">
       <p>{!! $ff_title->intro !!}</p>
    </div>
    @endforeach
    
      <div class="row">
        @foreach($ff_titles as $ff_title)
        <div class="col-md-3">
            <a href="{!! url('/freedom_fighter/freedomfighter_title/'.$ff_title->id); !!}"> <h4 class="headerfour" >{!! $ff_title->nickname !!}</h4></a>
            <div class="polaroids">
             <div class="polar">
                    <img src="{{ asset('/uploads/ff_title/'.$ff_title->image) }}"  width="304" height="236">
                    <p>{!! $ff_title->content !!}</p>
             </div>

            </div>
        </div>

           @endforeach
        </div>

</div>

@endsection