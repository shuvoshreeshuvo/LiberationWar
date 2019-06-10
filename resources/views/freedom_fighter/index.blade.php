@extends('layouts.front')

@section('title', 'Our History || Freedom Fighter')

@section('content') 

</style>

<div class="container">
    <h2 style="text-align: center; color:red;" class="m-4">বাংলাদেশের স্বাধীনতা যুদ্ধের খেতাবপ্রাপ্ত মুক্তিযোদ্ধা</h2>
    <hr>

      
      <div class="row">
        @foreach($ff_titles as $ff_title)
        <div class="col-md-6">
            <div class="thumbnail">
             <div class="polaroid">
                    <img src="{{ asset('/uploads/ff_title/'.$ff_title->image) }}"  class="img-thumbnail" width="304" height="236">
                    <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
                 <p style="text-align: center;">
                           <span class="wpb_button align_center">
                               <a href="{!! url('/freedom_fighter/freedomfighter_title/'.$ff_title->id); !!}" class="g-btn color_green"  >
                                   <span>Read More</span>
                               </a>
                           </span>
                </p>

            </div>
          </div>
           @endforeach
        </div>

</div>

@endsection