<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ModelBlog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog=ModelBlog::get();
        return view('backend.blog.index', [
            'blog' => $blog
        ]);
        
    }
}
