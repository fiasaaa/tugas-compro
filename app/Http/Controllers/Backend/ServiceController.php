<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ModelService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services=ModelService::get();
        return view('backend.service.index', [
            'services'=>$services,
        ]);
    }
}
