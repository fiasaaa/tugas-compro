<?php

use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\BlogController as BackendBlogController;
use App\Http\Controllers\Backend\ServiceController;
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

Route::get('backend/slider',[SliderController::class,'index'])->name('backend.slider');
Route::get('backend/service',[ServiceController::class,'index'])->name('backend.service');