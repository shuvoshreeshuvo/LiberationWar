<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> হোম || আমার ইতিহাস</title>
    <link href="{{asset('frontend/images/bd.png')}}" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <style>

        .headertwo{
            color: red;
            padding:10px 0px 10px 0px;
            text-align: center;
            font-size:25px;
        }
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
        .form-inline .form-control{
            width: 200px;
        }
        input[type=search] {
            border: 1px solid #00885A;
            box-shadow: 0 1px 0 0 #00885A;
        }
        input[type=search]::placeholder {
            color: #F93B00 ;
            font-size: 12px;
            font-weight: bold;

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
        <h1 class="display-4"> {{ __('header.logo') }} </h1>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">{{ __('header.home') }}<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('header.history') }}
                    </a>
                    <div class="dropdown" >
                        <div class="dropdown-content">


                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{!! url('/bongobondu'); !!}">{{ __('header.bongobondhu') }}</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('header.archive') }}
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
                        {{ __('header.freedom fighter') }}
                    </a>
                    <div class="dropdown" >
                        <div class="dropdown-content">



                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link " href="{!! url('/books'); !!}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('header.book') }}
                    </a>
                    <div class="dropdown" >
                        <div class="dropdown-content">


                        </div>
                    </div>

                </li>


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




<!-- Footer -->
@include('layouts.user.include.footer')
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
