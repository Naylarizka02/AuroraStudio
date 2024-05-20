@extends('navbar')

@section('content')
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="text mt-4"><center><h1>Welcome To Aurora Studio</h1></center></div>
  <div class="carousel-inner">
    <div class="carousel-item active">
            <div class="row text-center justify-content-center ">
        <div class="card g-col-4  mx-4 my-5" style="width: 16rem;">
            <img src="{{asset('publicimage/card1.jpg')}}" class="card-img-top my-3 col-sm-4"  alt="...">
        </div>

        <div class="card g-col-4 mx-4 my-5" style="width: 16rem;">
            <img src="{{asset('publicimage/card2.jpg')}}" class="card-img-top my-3" alt="...">
        </div>

        <div class="card g-col-4 mx-4 my-5" style="width: 16rem;">
            <img src="{{asset('publicimage/card3.jpg')}}" class="card-img-top my-3" alt="...">
        </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="row text-center justify-content-center ">
        <div class="card g-col-4  mx-4 my-5" style="width: 16rem;">
            <img src="{{asset('publicimage/card4.jpg')}}" class="card-img-top my-3 col-sm-4"  alt="...">
        </div>

        <div class="card g-col-4 mx-4 my-5" style="width: 16rem;">
            <img src="{{asset('publicimage/card5.jpg')}}" class="card-img-top my-3" alt="...">
        </div>

        <div class="card g-col-4 mx-4 my-5" style="width: 16rem;">
            <img src="{{asset('publicimage/card6.jpg')}}" class="card-img-top my-3" alt="...">
        </div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="row text-center justify-content-center ">
        <div class="card g-col-4  mx-4 my-5" style="width: 16rem;">
            <img src="{{asset('publicimage/card7.jpg')}}" class="card-img-top my-3 col-sm-4"  alt="...">
        </div>

        <div class="card g-col-4 mx-4 my-5" style="width: 16rem;">
            <img src="{{asset('publicimage/card8.jpg')}}" class="card-img-top my-3" alt="...">
        </div>

        <div class="card g-col-4 mx-4 my-5" style="width: 16rem;">
            <img src="{{asset('publicimage/card9.jpg')}}" class="card-img-top my-3" alt="...">
        </div>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<center><a href="#" class="btn btn-primary">Login To Booking</a></center>
 @endsection
