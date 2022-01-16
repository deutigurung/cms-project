<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::resource('/teams', TeamController::class);
Route::resource('/blogCategory', BlogCategoryController::class);
Route::resource('/blogs', BlogController::class);
Route::resource('/partners', PartnerController::class);
Route::resource('/social-links', SocialLinkController::class);
Route::resource('/testimonials', TestimonialController::class);
Route::resource('/banners', BannerController::class);
