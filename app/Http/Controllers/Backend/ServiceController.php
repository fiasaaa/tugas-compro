<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ModelService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ServiceController extends Controller
{
    public function index(){
        $services=ModelService::get();
        return view('backend.service.index', [
            'services'=>$services,
        ]);
    }
    public function tambah(){
        return view('backend.service.tambah');
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
        if ($request->hasFile('file'))
        // berfungsi untuk mengecek apakah permintaan (request) mengandung file dengan input name 'file'
         {
            $file = $request->file('file');
            // Mengambil file yang diunggah dari input form dengan nama file
            $filename = time() . '.' . $file->getClientOriginalExtension();
            //digunakan untuk membuat nama file unik berdasarkan waktu (timestamp) dan ekstensi asli file
            $file->move(public_path('services'), $filename);
            // digunakan untuk memindahkan file yang diunggah dari direktori sementara ke direktori public/services pada server Laravel, dan memberinya nama file yang ditentukan dalam variabel $filename
            // jika file sudah di upload masukan nama file/folder
            $data['file'] = 'services/' . $filename;
            // digunakan untuk menyimpan path relatif dari file yang diunggah ke dalam array atau variabel data. Path ini nantinya bisa disimpan ke dalam basis data
        }
        ModelService::insert($data);
        return redirect()->route('backend.service')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function edit($id) {
        $services = ModelService::where('id', $id)->first();

        return view('backend.service.edit', compact('services'));

    }
    public function aksi_edit(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'file|mimes:jpeg,png|max:2048',
        ]);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'slug'=>Str::slug($request->title)
        ];
        if($request->hasFile('file'))
        ModelService::where('id',$id)->update($data);
        return redirect()->route('backend.service')->with('succes', 'service berhasil ubah');
    }
}
