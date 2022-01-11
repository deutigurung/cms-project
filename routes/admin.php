<?php

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TeamController;
use Illuminate\Support\Facades\Route;

Route::resource('/teams', TeamController::class);
Route::resource('/blogCategory', BlogCategoryController::class);
Route::resource('/blogs', BlogController::class);
