<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link href="{{asset('frontend/images/bd.png')}}" rel="icon">
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

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
                        @foreach($periods as $period)
                            <a  href="{!! url('/etihash/period/'.$period->id); !!}">

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

                <a class="nav-link " href="{!! url('/bongobondu'); !!}">{{ __('header.bongobondhu') }}</a>

            </li>



            <?php $lang =  app()->getLocale(); ?>

            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('header.archive') }}
                </a>


                <div class="dropdown" >
                    <div class="dropdown-content">
                        <a  href="{!! url('/archive/image'); !!}">{{ __('header.image') }}</a>
                        <a  href="{!! url('/archive/documents'); !!}">{{ __('header.documents') }}</a>
                        <a  href="{!! url('/archive/video'); !!}">{{ __('header.video') }}</a>
                         <a  href="{!! url('/archive/audio'); !!}">{{ __('header.audio') }}</a>

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
                            <a  href="{!! url('/freedom_fighter/freedomfighter_title/'.$ff_title->id); !!}">

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

                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{ __('header.book') }}
                </a>
                <div class="dropdown" >
                    <div class="dropdown-content">
                        @foreach($bookcategories as $bookcategory)
                            <a  href="{!! url('/books/bookcategory/'.$bookcategory->id); !!}">

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
                <a class="nav-link " href="{!! url('/about'); !!}">{{ __('header.about') }}</a>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>