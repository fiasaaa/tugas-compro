@extends('layouts.master')
 @section('content')

 <div class="container">
    <div class="row">

        <div class="col-8 p-4  border-radius">
            <div class="row">
                <div class="col-12  ">
                    <div class="bg-img mt-32"><img class="w-100 bora-16" src="{{asset($blog->file)}}" alt="file"/></div>
                </div>

                <div class="col-12">
                    <h3>{{$blog->title}}</h3>
                    <b>17 September 2024</b>
                    <p>{!!$blog->description!!}</p>
                </div>
            </div>
        </div>

        <div class="col-4  p-4 border-radius">
                <h3>Blog Terbaru</h3>
                @foreach ($blog_terbaru as $item)
                    <div class="row mt-3 my-2">
                        <div class="col-3 ">
                            <img src="{{asset($item->file)}}" class="images border-radius w-100 h-100 object-cover">
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

 @endsection