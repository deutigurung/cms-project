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
Route::get('/projects', [App\Http\Controllers\FrontendController::class, 'projects'])->name('front.projects');
Route::get('/projects/{slug}', [App\Http\Controllers\FrontendController::class, 'projectBySlug'])->name('front.projectBySlug');
Route::get('/blogs', [App\Http\Controllers\FrontendController::class, 'blogs'])->name('front.blogs');
Route::get('/blogs/{slug}', [App\Http\Controllers\FrontendController::class, 'blogBySlug'])->name('front.blogBySlug');
Route::get('/about-us', [App\Http\Controllers\FrontendController::class, 'about'])->name('front.about');
Route::get('/contact-us', [App\Http\Controllers\FrontendController::class, 'contact'])->name('front.contact');
Route::post('/query-form', [App\Http\Controllers\FrontendController::class, 'queryForm'])->name('front.queryForm');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{page_url}', [App\Http\Controllers\FrontendController::class, 'pageByUrl'])->name('front.pageByUrl');
