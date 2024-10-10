<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ModelSlider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index() {
        $sliders=ModelSlider::get();
        return view('backend.slider.index',
    ['sliders'=>$sliders]);
    }
}
