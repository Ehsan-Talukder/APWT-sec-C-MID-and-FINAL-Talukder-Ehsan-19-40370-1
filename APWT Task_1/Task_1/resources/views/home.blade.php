<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Welcome to PC World</h1>
@extends('layouts.app')
@section('content')<br>



<div class="container">
  <div class="row">
    <div class="col-sm">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{URL('image/1.jpg')}}" alt="First slide" height="450" width="50">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL('image/2.jpg')}}" alt="Second slide" height="450" width="50">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL('image/3.jpg')}}" alt="Third slide" height="450" width="50">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a><br>
</div>
    </div>
  </div>
</div>

<div class="card" style="width: 28rem;">
  <div class="card-body">
    <p class="card-text"><b>Here we can build and provide all type of pc with every kind of configuration.</b></p>
  </div><br>
</div>

    @endsection
</body>
</html>