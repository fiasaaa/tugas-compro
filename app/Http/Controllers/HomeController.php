<?php

namespace App\Http\Controllers;

use App\Models\ModelBlog;
use App\Models\ModelService;
use App\Models\ModelSlider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $sliders=ModelSlider::get();
        $services=ModelService::get();
        $blogs=ModelBlog::get();

        return view('home', [
            'sliders'=>$sliders,
            'services'=>$services,
            'blogs'=>$blogs
        ]);
    }
}
