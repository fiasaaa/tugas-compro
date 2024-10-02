<?php

namespace App\Http\Controllers;

use App\Models\ModelBlog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $blogs=ModelBlog::orderBy('id','desc')->get();
        $blog_terbaru=ModelBlog::orderBy('id','desc')->limit(4)->get();
        $blog_lainnya=ModelBlog::orderBy('id','asc')->get();

        return view('blog', [
            'blogs'=>$blogs,
            'blog_terbaru'=>$blog_terbaru,
            'blog_lainnya'=>$blog_lainnya
        ]);
    }

    public function detail($slug) {
        $blog=ModelBlog::where('slug',$slug)->first();
        $blog_terbaru=ModelBlog::get();
        return view('blog_detail',[
            'blog'=>$blog,
            'blog_terbaru'=>$blog_terbaru
        ]);
    }
}
