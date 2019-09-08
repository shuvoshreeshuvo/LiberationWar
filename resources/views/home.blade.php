<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ __('header.home') }}{{ __('header.title') }}{{ __('header.logo') }}</title>
    <link href="{{asset('frontend/images/bd.png')}}" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>

<body>

<!--Header -->

<div class="jumbotron jumbotron-fluid">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="display-4">{{ __('header.logo') }}</h1>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/{{app()->getLocale()}}">{{ __('header.home') }}<span class="sr-only">(current)</span></a>
                </li>

                <?php $lang =  app()->getLocale(); ?>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('header.history') }}
                    
                    </a>
                    <div class="dropdown" >
                        <div class="dropdown-content">
                            @foreach($periods as $period)

                                <a  href="{!! url($lang.'/etihash/period/'.$period->id); !!}">

                                @if(app()->getLocale() == 'bn')
                                    {{ $period->name }}
                                @else
                                    {{ $period->ename }}
                                @endif

                                    ( {{ $period->starting_year .' - '. $period->ending_year }} )</a>

                            @endforeach
                            
                         </div>
                        </div>
                </li>
                            <?php $lang =  app()->getLocale(); ?>
                            <li class="nav-item">

                                <a class="nav-link " href="{!! url($lang.'/bongobondu'); !!}">{{ __('header.bongobondhu') }}</a>

                            </li>

                             <?php $lang =  app()->getLocale(); ?>
                            <li class="nav-item dropdown">
                                 <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ __('header.archive') }}
                                 </a>

                                <div class="dropdown" >
                                    <div class="dropdown-content">
                                        <a  href="{!! url($lang.'/archive/image'); !!}">{{ __('header.image') }}</a>
                                        <a  href="{!! url($lang.'/archive/documents'); !!}">{{ __('header.documents') }}</a>
                                        <a  href="{!! url($lang.'/archive/video'); !!}">{{ __('header.video') }}</a>
                                        <a  href="{!! url($lang.'/archive/audio'); !!}">{{ __('header.audio') }}</a>

                                    </div>
                                </div>
                            </li>

                <?php $lang =  app()->getLocale(); ?>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{!! url('/freedom_fighter'); !!}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('header.freedom fighter') }}
                    </a>
                    <div class="dropdown" >
                        <div class="dropdown-content">
                            @foreach($ff_titles as $ff_title)
                                <a  href="{!! url($lang.'/freedom_fighter/freedomfighter_title/'.$ff_title->id); !!}">

                                    @if(app()->getLocale() == 'bn')
                                        {{ $ff_title->nickname }}
                                    @else
                                        {{ $ff_title->enickname }}
                                    @endif
                                </a>

                            @endforeach

                        </div>
                    </div>

                </li>

                <?php $lang =  app()->getLocale(); ?>
                <li class="nav-item dropdown">

                    <a class="nav-link " href="{!! url('/books'); !!}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('header.book') }}
                    </a>
                    <div class="dropdown" >
                        <div class="dropdown-content">
                            @foreach($bookcategories as $bookcategory)

                                <a  href="{!! url($lang.'/books/bookcategory/'.$bookcategory->id); !!}">
                                    @if(app()->getLocale() == 'bn')
                                        {{ $bookcategory->book_type }}
                                    @else
                                        {{ $bookcategory->ebook_type }}
                                    @endif
                                </a>

                            @endforeach

                        </div>
                    </div>

                </li>

                <?php $lang =  app()->getLocale(); ?>
                <li class="nav-item">
                    <a class="nav-link " href="{!! url($lang.'/about'); !!}"> {{ __('header.about') }}</a>
                </li>
            </ul>


            <!-- Search form -->
            <form class="form-inline my-2 my-lg-0" action="{{ url('/search') }}" method="GET">
                {{ csrf_field() }}
                <i class="fas fa-search" aria-hidden="true"></i>
                <input class="form-control mr-sm-2 ml-3" type="search" placeholder="{{ __('header.search') }}" name="search" aria-label="Search">
            </form>

        </div>
    </nav>

</div>


<!-- Three major movement -->
<div class="container" >
    <h2 class="headertwo">স্বাধীনতার যাত্রা</h2>

<div class="row">

   @if($periods->count() > 0)
    @foreach($periods as $period)

           <div class="col-md-4">
            <div class="thumbnail">
                <h3 class="headerthree">{{ $period->name }}</h3>
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



<h6 class="headersix">ছবি</h6>

<!--Carousel Wrapper-->
<div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top" id="control">
        <a  href="#carousel-with-lb" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
        <a  href="#carousel-with-lb" data-slide="next"><i class="fas fa-chevron-right"></i></a>
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
             
             @foreach($image1 as $data)
            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="{{ asset('/uploads/archive/'.$data->media) }}" class="img-fluid"  style="width: 400px; height: 200px; " >
                </a>
            </figure>
            @endforeach
        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class=" carousel-item text-center">
            @foreach($image2 as $data)

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="{{ asset('/uploads/archive/'.$data->media) }}" class="img-fluid"  style="width: 400px; height: 200px; " >
                </a>
            </figure>
            @endforeach

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class=" carousel-item text-center">
            @foreach($image3 as $data)

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="{{ asset('/uploads/archive/'.$data->media) }}" class="img-fluid"  style="width: 400px; height: 200px; " >
                </a>
            </figure>
            @endforeach

        </div>
        <!--/.Third slide-->

    </div>
    <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->

<!--video gallery -->

<h6 class="headersix">ভিডিও</h6>

<main role="main">
    <article>
        <p>এখানে বাংলাদেশের মুক্তিযুদ্ধ বিষয়ক ভিডিও, টেলিভিশন রিপোর্ট এবং বিশেষ ডকুমেন্টারি সংগ্রহ করে দেখানোর চেষ্টা করা হয়েছে। যুদ্ধক্ষেত্রের বিভিন্ ফুটেজ,পাকিস্তানের আত্মসমর্পণের
            ফুটেজ, গণহত্যার বিবরণ ও ধর্ষণের বিস্তারিত বর্ণনা, পূর্ব পাকিস্তানে পাকিস্তান সেনাবাহিনী যে অত্যাচার করেছিল তার বিবরণ তুলে ধরা হয়েছে।</p>
    </article>
    <section class="videos" id="featured-videos">
        <div class="video-grid front-page" id="front-page-videos">
            <ul class="video-list featured">
                @foreach($Videofootage as $data)
                <li class="video featured">
                   <a data-fancybox href="{{ $data->path }}" class="featured-video">
                    @if(file_exists('uploads/figure/'.$data->figure))
                        <figure style="background-image: url('uploads/figure/{{$data->figure}}')">
                            <img class="videoimage" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                            <figcaption>{{ $data->title }}</figcaption>
                        </figure>
                    @else
                        <figure style="background-image: url('{{$data->figure}}')">
                            <img class="videoimage" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                            <figcaption>{{ $data->title }}</figcaption>
                        </figure>
                    @endif
                    </a>
                </li>
                @endforeach


             
            </ul>
        </div>
    </section>
</main>

<!-- Video Gallery -->

<!-- Footer -->
@include('layouts.user.include.footer')
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
