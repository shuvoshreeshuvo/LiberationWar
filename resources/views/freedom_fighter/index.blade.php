@extends('layouts.front')

@section('title', 'Our History || Freedom Fighter')

@section('content')

<div class="container">
    <h2 style="text-align: center; color:red;" class="m-4">বাংলাদেশের স্বাধীনতা যুদ্ধের খেতাবপ্রাপ্ত মুক্তিযোদ্ধা</h2>


     @foreach($ff_titles as $ff_title)    
     <div class="content">   
       <p>{!! $ff_title->intro !!}</p>
    </div>
    @endforeach
    
      <div class="row">
        @foreach($ff_titles as $ff_title)
        <div class="col-md-3">
            <a href="{!! url('/freedom_fighter/freedomfighter_title/'.$ff_title->id); !!}"> <h3 style="text-align: center; color:red;" >{!! $ff_title->nickname !!}</h3></a>
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