<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('front.home');
Route::get('/services', [App\Http\Controllers\FrontendController::class, 'services'])->name('front.services');
Route::get('/services/{slug}', [App\Http\Controllers\FrontendController::class, 'serviceBySlug'])->name('front.serviceBySlug');
Route::get('/faqs', [App\Http\Controllers\FrontendController::class, 'faqs'])->name('front.faqs');
Route::get('/testimonials', [App\Http\Controllers\FrontendController::class, 'testimonials'])->name('front.testimonials');
Route::get('/blogs', [App\Http\Controllers\FrontendController::class, 'blogs'])->name('front.blogs');
Route::get('/blogs/{slug}', [App\Http\Controllers\FrontendController::class, 'blogBySlug'])->name('front.blogBySlug');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
