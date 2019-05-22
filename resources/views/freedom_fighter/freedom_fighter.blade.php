@extends('layouts.front')

@section('title','Our History || Freedom_Fighter')

@section('content')
<style type="text/css">
  .black {
  color: #000000;
  }
</style>

<div class="container">
    <h1 style="text-align: center;color: red;">মুক্তিযোদ্ধা‎</h1>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height: 500px;" class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/bn/5/5e/%E0%A6%AE%E0%A6%B9%E0%A6%BF%E0%A6%89%E0%A6%A6%E0%A7%8D%E0%A6%A6%E0%A7%80%E0%A6%A8_%E0%A6%9C%E0%A6%BE%E0%A6%B9%E0%A6%BE%E0%A6%99%E0%A7%8D%E0%A6%97%E0%A7%80%E0%A6%B0.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block black">
        <h5>Autoshee Chanda</h5>
        <p>She is a very bad girl.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img style="height: 300px;" class="d-block w-100" src="images/book2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="height: 300px;" class="d-block w-100" src="images/book3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="height: 300px;" class="d-block w-100" src="images/book4.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="height: 300px;" class="d-block w-100" src="images/book5.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img  style="height: 300px;" class="d-block w-100" src="images/book6.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>

@endsection