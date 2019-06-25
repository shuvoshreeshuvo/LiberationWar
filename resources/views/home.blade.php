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
    border: 10px solid #fff;
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
                    <a class="nav-link" href="/">হোম<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ইতিহাস
                    </a>
                    <div class="dropdown" >
                        <div class="dropdown-content">
                            @foreach($periods as $period)
                            <a  href="{!! url('/etihash/period/'.$period->id); !!}"> {{ $period->name }} ( {{ $period->starting_year .' - '. $period->ending_year }} )</a>
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

                <li class="nav-item dropdown">

                    <a class="nav-link " href="{!! url('/books/books'); !!}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        বই
                    </a>
                    <div class="dropdown" >
                        <div class="dropdown-content">
                            @foreach($bookcategories as $bookcategory)
                                <a  href="{!! url('/books/bookcategory/'.$bookcategory->id); !!}"> {{ $bookcategory->book_type}}</a>

                            @endforeach

                        </div>
                    </div>
                    

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
                     <img  class="homeimage" src="{{ asset('/uploads/period/'.$period->image) }}"  class="img-thumbnail" alt="Fjords" width="304" height="236">

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

<!--video gallery -->

<h6>ভিডিও</h6>

<main role="main">
    <article>
        <p>এখানে বাংলাদেশের মুক্তিযুদ্ধ বিষয়ক ভিডিও, টেলিভিশন রিপোর্ট এবং বিশেষ ডকুমেন্টারি সংগ্রহ করে দেখানোর চেষ্টা করা হয়েছে। যুদ্ধক্ষেত্রের বিভিন্ ফুটেজ,পাকিস্তানের আত্মসমর্পণের
            ফুটেজ, গণহত্যার বিবরণ ও ধর্ষণের বিস্তারিত বর্ণনা, পূর্ব পাকিস্তানে পাকিস্তান সেনাবাহিনী যে অত্যাচার করেছিল তার বিবরণ তুলে ধরা হয়েছে।</p>
    </article>
    <section class="videos" id="featured-videos">
        <div class="video-grid front-page" id="front-page-videos">
            <ul class="video-list featured">
                <li class="video featured">
                    <a data-fancybox href="https://www.youtube.com/embed/Zq6Crtglztk?autoplay=1&controls=0&showinfo=0&color=white&rel=0" class="featured-video">
                        <figure style="background-image: url(https://img.youtube.com/vi/Zq6Crtglztk/hqdefault.jpg);">
                            <img class="videoimage" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                            <figcaption>Swap-Meet Speed for Roadkill Nights</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="video featured">
                    <a data-fancybox href="https://www.youtube.com/embed/qDK86kzgUPg?autoplay=1&controls=0&showinfo=0&color=white&rel=0" class="featured-video">
                        <figure style="background-image: url(https://img.youtube.com/vi/qDK86kzgUPg/hqdefault.jpg);">
                            <img class="videoimage"  src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                            <figcaption>Cummins Diesel in a Cadillac</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="video featured">
                    <a data-fancybox href="https://www.youtube.com/embed/uSB2_428P2w?autoplay=1&controls=0&showinfo=0&color=white&rel=0" class="featured-video">
                        <figure style="background-image: url(https://img.youtube.com/vi/uSB2_428P2w/hqdefault.jpg);">
                            <img class="videoimage"  src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                            <figcaption>Dirt-Track Challenger Rescue and Thrash</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="video featured">
                    <a data-fancybox href="https://www.youtube.com/embed/pOhl6oVpEes?autoplay=1&controls=0&showinfo=0&color=white&rel=0" class="featured-video">
                        <figure style="background-image: url(https://img.youtube.com/vi/pOhl6oVpEes/hqdefault.jpg);">
                            <img class="videoimage"  src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                            <figcaption>Junkyard 1956 Buick Hack</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="video featured">
                    <a data-fancybox href="https://www.youtube.com/embed/PVs_xZ46Cxw?autoplay=1&controls=0&showinfo=0&color=white&rel=0" class="featured-video">
                        <figure style="background-image: url(https://img.youtube.com/vi/PVs_xZ46Cxw/hqdefault.jpg);">
                            <img class="videoimage"  src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                            <figcaption>Wheelstanding Dump Truck! Stubby Bob’s Comeback</figcaption>
                        </figure>
                    </a>
                </li>
                <li class="video featured">
                    <a data-fancybox href="https://www.youtube.com/embed/C4jk51rgfts?autoplay=1&controls=0&showinfo=0&color=white&rel=0" class="featured-video">
                        <figure style="background-image: url(https://img.youtube.com/vi/C4jk51rgfts/hqdefault.jpg);">
                            <img class="videoimage"  src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                            <figcaption>Will It Go 10s? Mazdarati Is Back!</figcaption>
                        </figure>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</main>



<!-- Video Gallery -->


<!-- Footer -->
@include('layouts.user.include.footer')
<!-- Footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


</body>

</html>
