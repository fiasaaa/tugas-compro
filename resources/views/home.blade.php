@extends('layouts.master')
 @section('content')


 <div id="carouselExampleIndicators" class="carousel slide ">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          @foreach  ($sliders as $item)
          <div class="carousel-item active">
            <img src="{{$item->file}}" class="d-block w-100 h-slider" alt="...">
          </div>
          @endforeach
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

        <div class="container mt-5">
            
            <div class="row">
                <div class="heading-3 text-center"><h2>Layanan kami</h2></div>
                @foreach ($services as $item)
                <div class="col-sm-12 col-md-6 col-lg-4 ">
                    <div class="border-card p-4 border-radius">
                        <b>{{$item->title}}</b>
                        <p>{{$item->description}}</p>
                    </div>
                </div>   

                @endforeach
                               
            </div>
            
        </div>

    <div class="container mt-5">
        <div class="row">
            <div class="heading-3 text-center"><h2>Artikel</h2></div>
            @foreach ($blogs as $item)
            <div class="col-sm-12 col-md-6 col-lg-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{$item->file}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->title}}</h5>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            
            @endforeach
              
        </div>
    </div>    
        
 @endsection
