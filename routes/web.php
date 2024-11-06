<?php

use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\BlogController as BackendBlogController;
use App\Http\Controllers\Backend\SliderController as BackendSliderController;
use App\Http\Controllers\Backend\ServiceController as BackendServiceController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/blog', [BlogController::class,'index'])->name('blog');
Route::get('/blog/detail/{slug}', [BlogController::class,'detail'])->name('blog_detail');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('backend/blog',[BackendBlogController::class,'index'])->name('backend.blog');
Route::get('backend/blog/tambah',[BackendBlogController::class,'tambah'])->name('backend.blog.tambah');
Route::post('backend/blog/aksi_tambah',[BackendBlogController::class,'aksi_tambah'])->name('backend.blog.aksi_tambah');

Route::get('backend/blog/edit{id}',[BackendBlogController::class,'edit'])->name('backend.blog.edit');
Route::post('backend/blog/aksi_edit/{id}',[BackendBlogController::class,'aksi_edit'])->name('backend.blog.aksi_edit');

Route::get('backend/slider',[SliderController::class,'index'])->name('backend.slider');
Route::get('backend/slider/tambah',[BackendSliderController::class,'tambah'])->name('backend.slider.tambah');

Route::get('backend/service',[BackendServiceController::class,'index'])->name('backend.service');
Route::get('backend/service/tambah',[BackendServiceController::class,'tambah'])->name('backend.service.tambah');
Route::post('backend/service/aksi_tambah',[BackendServiceController::class,'aksi_tambah'])->name('backend.service.aksi_tambah');

Route::get('backend/service/edit{id}',[BackendServiceController::class,'edit'])->name('backend.service.edit');
Route::post('backend/service/aksi_edit/{id}',[BackendServiceController::class,'aksi_edit'])->name('backend.service.aksi_edit');
