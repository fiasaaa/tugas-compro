<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ModelBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(){
        $blog=ModelBlog::get();
        return view('backend.blog.index', [
            'blog' => $blog
        ]);
        
    }

    public function tambah(){
        return view('backend.blog.tambah');
    }

    public function aksi_tambah(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|file|mimes:jpg,jpeg,png,gif'
        ]);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            // slug adalah untuk membuat URL yang mudah dibaca dan dimengerti oleh pengguna serta mesin pencari
            'created_by' => 0,
            'created_at' => date('Y-m-d h:i:s')
        ];
        // Skrip memeriksa apakah ada file yang diunggah dengan request menggunakan $request->hasFile('file')
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('blogs'), $filename);
            // jika file sudah di up;oad masukan nama file/folder
            $data['file'] = 'blogs/' . $filename;
        }
        ModelBlog::insert($data);
        return redirect()->route('backend.blog')->with('success', 'Data Berhasil Ditambahkan');
    }
}
