<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  
    

    

</head>

<body>

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
                <a class="nav-link " href="archive" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ইতিহাস
                </a>
                <div class="dropdown" >
                    <div class="dropdown-content">
                        <!-- <a  href="{!! url('/etihash/languagemovement/index'); !!}">প্রথম পর্যায়</a> -->

                        @foreach($periods as $period)
                            <a  href="{!! url('/etihash/period/'.$period->id); !!}"> {{ $period->name }} ( {{ $period->starting_year .' - '. $period->ending_year }} )</a>
                        @endforeach
                        <!-- 
                        <a  href="{!! url('/etihash/massuprisingg'); !!}">দ্বিতীয় পর্যায়</a>
                        <a  href="{!! url('/etihash/liberationwar/liberationwar'); !!}">তৃতীয় পর্যায়</a> -->
                    </div>
                </div>


            </li>

            <li class="nav-item">
                <a class="nav-link " href="{!! url('/bongobondu/bongobondu'); !!}">বঙ্গবন্ধু</a>
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

                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{!! url('/freedom_fighter/freedom_fighter'); !!}">মুক্তিযোদ্ধা‎ </a>
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
