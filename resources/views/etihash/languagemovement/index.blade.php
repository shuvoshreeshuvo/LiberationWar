@extends('layouts.front')

@section('title', 'পর্যায়কাল  || আমার ইতিহাস')

@section('content') 


<style>

    .homeimage{
     margin: auto;
            display: inline;
            vertical-align: middle;
            border-style: none;
             border: 10px solid #fff;
            width:100%;
            height: 200px;
            transition: transform 0.3s, filter 0.5s ease-in-out;
            transform-origin: center center;
            overflow: hidden;
        }

.img-thumbnail {
    padding: .25rem;
    background-color: blue;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: 150px;
}

span.wpb_button a{
    text-decoration: none;
}

span.wpb_button:hover a{
    background-color: #007236;
}

.g-btn span {
    position: relative;
}
.g-btn, button, input[type="submit"] {
    font-size: 15px;
    line-height: 20px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 10px 36px;
    margin: 5px 0;
    border: none;
    border-radius: 5px;
    overflow: hidden;
    -webkit-transition: color 0.3s, background-color 0.3s, box-shadow 0.3s;
    transition: color 0.3s, background-color 0.3s, box-shadow 0.3s;

    display: inline-block;
    vertical-align: middle;
    text-align: center;
    white-space: nowrap;
    position: relative;
    cursor: pointer;
}


.g-btn.color_green {
    background-color:#59ba41;
    color: #fff;
}

div.polaroid {
    width: 300px;
    background-color:white;
    padding: 0px 20px 0px 20px;
    margin-bottom: 25px;
}
div.polaroid:hover .homeimage{
    filter: brightness(100%);
    transform: scale(1.3);
}

   </style> 


<div class="container">

    @foreach($periods as $period)
        <h1 class="headertwo">{{ $period->name}} </h1>
     <div class="content">   
       <p>{!! $period->content !!}</p>
    </div>
    @endforeach
        
<div class="row ">

    @if($events->count() > 0)
    @foreach($events as $event)
        <div class="col-md-4">
            <div class="thumbnail">
                <h3 class="headerthree"  >{{ $event->title }} ( {{ $event->year}} )</h3>
                <div class="polaroid">
                    <img class="homeimage"  src="{{ asset('/uploads/event/'.$event->image) }}"  class="img-thumbnail" alt="Fjords" width="304" height="236">
                    <div class="caption">
                        <p class="lead text-secondary">
                        
                        {!! str_limit($event->content, $limit = 100, $end = '...') !!}
                    </p>
                    </div>
                </div>


                <p style="text-align: center;">
                           <span class="wpb_button align_center">
                               <a href="{!! url('/etihash/period/brief/'.$event->id); !!}" class="g-btn color_green"  >
                                   <span>আরো পড়ুন</span>
                               </a>
                           </span>
                </p>
            </div>
        </div>
        @endforeach
        @else
            <div class="col-md-12" style="text-align: center;">
                <h1>No Data Found.</h1>
            </div>
        @endif
      </div>
  </div>
  
<div class="container">
    <h2 class="headertwo" >কিছু ছবি </h2>
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel" >

        <!--Controls-->
        <div class="controls-top" id="multi-item-control">

            <a class="text-white" href="#multi-item-example" data-slide="prev" ><i class="fas fa-chevron-left"></i></a>
            <a class="text-white"  href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
        </div>
        <!--/.Controls-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid image-slider" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/1952_Bengali_Language_movement.jpg/250px-1952_Bengali_Language_movement.jpg"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid image-slider" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/21_Feb_1953_Dhaka_University_female_students_procession.png/220px-21_Feb_1953_Dhaka_University_female_students_procession.png"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid image-slider" src="https://www.newsg24.com/uploadFile/6f8dd_21_long.jpg"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid image-slider" src="https://upload.wikimedia.org/wikipedia/commons/3/30/21_feb_1952_DecideToBreak_Curfew.png"
                             alt="Card image cap">
                    </div>
                </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid image-slider" src="http://www.likhalikhi.com/wp-content/uploads/2018/08/42243523_303.jpg"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid image-slider" src="https://banglahub.com.bd/wp-content/uploads/2017/02/Shaheed_Minar_Behine_Dhaka_Hall.png"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid image-slider" src="https://banglahub.com.bd/wp-content/uploads/2017/02/694874813ce062ba31125a8dca9ede23-.jpg"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid image-slider" src="https://2.bp.blogspot.com/-7t_Xak3shcI/WG-AZWHcWFI/AAAAAAAAAIs/YbiNnfWDQpwCoerwmZa65E8bUafhsgbfgCLcB/s1600/ashim_mahamichil-1024x417.jpg"
                             alt="Card image cap">
                    </div>
                </div>

            </div>
            <!--/.Second slide-->

            <!--Third slide-->
            <div class="carousel-item">

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid image-slider" src="https://banglahub.com.bd/wp-content/uploads/2017/02/image_84_33609.jpg"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid image-slider" src="https://banglahub.com.bd/wp-content/uploads/2017/02/Shaheed_Minar_Behine_Dhaka_Hall.png"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid image-slider" src="https://www.anandabazar.com/polopoly_fs/1.567737.1487621002!/image/image.jpg_gen/derivatives/box_185_185/image.jpg"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                       <a href="Image"> <img class="img-fluid image-slider" src="https://www.dw.com/image/42243974_303.jpg"
                                             alt="Card image cap"></a>

                    </div>
                </div>
                <a href="{!! url('/Archive/Image'); !!}"style="text-align: left;text-decoration: none"> More Photos </a>

            </div>
            <!--/.Third slide-->

        </div>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->



</div>
@endsection