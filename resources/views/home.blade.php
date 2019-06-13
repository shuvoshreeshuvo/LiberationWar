<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> হোম || আমার ইতিহাস</title>
    <link href="{{asset('frontend/images/bd.png')}}" rel="icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    
    <style>

        img {
            margin: auto;
            display: inline;
            vertical-align: middle;
            border-style: none;
            height: 200px;
            transition: transform 0.3s, filter 0.5s ease-in-out;
            transform-origin: center center;
            overflow: hidden;
        }
    </style>
</head>

<body>

<!--Header -->

<div class="jumbotron jumbotron-fluid">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="display-4">আমার ইতিহাস</h1>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">হোম <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ইতিহাস
                    </a>
                    <div class="dropdown" >
                        <div class="dropdown-content">
                            @foreach($periods as $period)
                            <a  href="{!! url('/etihash/period/'.$period->id); !!}"> {{ $period->name }} ( {{ $period->starting_year .' - '. $period->ending_year }} )</a>
                            <!-- <a  href="{!! url('/etihash/massuprisingg'); !!}">  দ্বিতীয় পর্যায়</a>
                            <a  href="{!! url('/etihash/liberationwar/liberationwar'); !!}">  তৃতীয় পর্যায়</a> -->
                            @endforeach
                            
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{!! url('/bongobondu'); !!}">বঙ্গবন্ধু</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        আর্কাইভ
                    </a>
                    <div class="dropdown" >
                        <div class="dropdown-content">
                            <a  href="{!! url('/archive/image'); !!}">ছবি</a>
                            <a  href="{!! url('/archive/documents'); !!}">ডকুমেন্টস</a>
                            <a  href="{!! url('/archive/video'); !!}">ভিডিও ফুটেজ</a>
                            <a  href="{!! url('/archive/audio'); !!}">অডিও</a>

                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link " href="{!! url('/freedom_fighter'); !!}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        মুক্তিযোদ্ধা‎
                    </a>
                    <div class="dropdown" >
                        <div class="dropdown-content">
                            @foreach($ff_titles as $ff_title)
                            <a  href="{!! url('/freedom_fighter/freedomfighter_title/'.$ff_title->id); !!}"> {{ $ff_title->nickname }}</a>

                             @endforeach                                              

                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{!! url('/books/books'); !!}">বই</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{!! url('/about'); !!}">আমাদের সম্পর্কে</a>
                </li>
            </ul>

            <!--
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-oumyine-success btn-sm my-2 my-sm-0" type="submit">Search</button>
                        </form>-->

        </div>
    </nav>

</div>



<!-- Three major movement -->
<div class="container" >
    <h2 style="text-align: center;color: red">স্বাধীনতার যাত্রা</h2>

<div class="row">

   @if($periods->count() > 0)
    @foreach($periods as $period)

           <div class="col-md-4">
            <div class="thumbnail">
                <h3 style="text-align: center;font-size: 22px;color: #ff0000" >{{ $period->name }}</h3>
                <div class="polaroid">
                     <img src="{{ asset('/uploads/period/'.$period->image) }}"  class="img-thumbnail" alt="Fjords" width="304" height="236">

                    <div class="caption">
                        <p class="lead text-secondary">
                        
                        {!! str_limit($period->content, $limit = 100, $end = '...') !!}
                    </p>
                    </div>
                </div>


                <p style="text-align: center;">
                           <span class="wpb_button align_center">
                               <a href="{!! url('/etihash/period/'.$period->id); !!}" class="g-btn color_green">
                                   <span>Read More</span>
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



<h4 class="section-heading3"><a href="#">ছবি</a></h4>

<!--Carousel Wrapper-->
<div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
        <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
        <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="next"><i class="fas fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li>
        <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li>
        <li data-target="#carousel-with-lb" data-slide-to="2" class="secondary-color"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides and lightbox-->

    <div class="carousel-inner mdb-lightbox" role="listbox">
        <div id="mdb-lightbox-ui"></div>
        <!--First slide-->
        <div class=" carousel-item active text-center">

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/13.jpg" class="img-fluid"  style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/surrender-copy.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-womenfighters.jpg" class="img-fluid" style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/618889798.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-bangladeshchild.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/liberation-war-460.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class=" carousel-item text-center">

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/13.jpg" class="img-fluid"  style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/surrender-copy.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-womenfighters.jpg" class="img-fluid" style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/618889798.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-bangladeshchild.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/liberation-war-460.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class=" carousel-item text-center">

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/13.jpg" class="img-fluid"  style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/surrender-copy.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-womenfighters.jpg" class="img-fluid" style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/618889798.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-bangladeshchild.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/liberation-war-460.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

        </div>
        <!--/.Third slide-->

    </div>
    <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->






<!-- Footer -->
@include('layouts.user.include.footer')
<!-- Footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


</body>

</html>
