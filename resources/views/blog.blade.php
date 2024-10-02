@extends('layouts.master')
 @section('content')

 <div class="container mt-5">
    <div class="row mt-2 ">
        
            <div class="col-8  p-4 border-radius">
                @foreach ($blogs as $item)
                    <div class="row my-2">
                        <div class="col-5  ">
                            <img src="{{$item->file}}" class="images border-radius w-100 h-100" >
                        </div>

                        <div class="col-7  ">
                            <h3>{{$item->title}} </h3>
                            <p>12 September 2024</p>
                            <a href="{{ route('blog_detail',$item->slug) }}" class="text-black" link rel="stylesheet" >Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-4  p-4 border-radius">
                <h3>Blog Terbaru</h3>
                @foreach ($blog_terbaru as $item)
                    <div class="row mt-3 my-2">
                        <div class="col-3 ">
                            <img src="{{$item->file}}" class="images border-radius w-100 h-100 object-cover">
                        </div>
                        <div class="col-9 ">
                            <h3>{{$item->title}}</h3>
                            <p>12 September 2024</p>
                        </div>
                    </div>
                @endforeach
        
            </div>
    </div>
  </div>
   
  
  <div class="container mt-5">
    <h3>Blog Lainnya</h3>
    @foreach ($blog_lainnya as $item)
        <div class="row my-2">
            <div class="col-6">
                <div class="row mt-3">
                    <div class="col-3 ">
                        <img src="{{$item->file}}" class="images border-radius w-100 h-100 object-cover">
                    </div>
                    <div class="col-9 ">
                        <h3>{{$item->title}}</h3>
                        <p>12 September 2024</p>
                        <a href="" class="text-black" link rel="stylesheet" href="">Read More</a>
                    </div>
                </div>
            </div>
    @endforeach  
        </div>
  </div>

 @endsection