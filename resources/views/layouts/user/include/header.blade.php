<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg fixed-top">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="display-4">{{ __('header.logo') }}</h1>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">{{ __('header.home') }} <span class="sr-only">(current)</span></a>
            </li>


           <?php $lang =  app()->getLocale(); ?>
            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('header.history') }}
                </a>

                 
                <div class="dropdown" >
                    <div class="dropdown-content">
                        <!-- <a  href="{!! url('/etihash/languagemovement/index'); !!}">প্রথম পর্যায়</a> -->
                        
                        @foreach($periods as $period)
                            <a  href="{!! url($lang.'/etihash/period/'.$period->id); !!}"> 

                            @if(app()->getLocale() == 'bn')
                                {{ $period->name }}
                            @else
                                {{ $period->ename }}
                            @endif

                             ( {{ $period->starting_year .' - '. $period->ending_year }} )</a>
                        @endforeach
                        <!-- 
                        <a  href="{!! url('/etihash/massuprisingg'); !!}">দ্বিতীয় পর্যায়</a>
                        <a  href="{!! url('/etihash/liberationwar/liberationwar'); !!}">তৃতীয় পর্যায়</a> -->
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

            <li class="nav-item dropdown">
                   <a class="nav-link " href="{!! url('/freedom_fighter'); !!}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       {{ __('header.freedom fighter') }}
                    </a>
                     <div class="dropdown" >
                        <div class="dropdown-content">
                            @foreach($ff_titles as $ff_title)
                            <a  href="{!! url('/freedom_fighter/freedomfighter_title/'.$ff_title->id); !!}"> {{ $ff_title->nickname }}</a>

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
                            @endif</a>

                    
                        @endforeach

                    </div>
                </div>

            </li>

            <?php $lang =  app()->getLocale(); ?>
            <li class="nav-item">
                <a class="nav-link " href="{!! url($lang.'/about'); !!}">{{ __('header.about') }}</a>
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
</body>