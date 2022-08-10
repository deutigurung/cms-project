<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
<<<<<<< HEAD
=======
use App\Http\Controllers\Admin\EventController;
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GalleryImageController;
use App\Http\Controllers\Admin\JsonController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\QueryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth'])->group(function () {
<<<<<<< HEAD
    Route::resource('/teams', TeamController::class);
=======
    Route::resource('/contacts', TeamController::class);
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
    Route::resource('/blogCategory', BlogCategoryController::class);
    Route::resource('/blogs', BlogController::class);
    Route::resource('/partners', PartnerController::class);
    Route::resource('/social-links', SocialLinkController::class);
    Route::resource('/testimonials', TestimonialController::class);
    Route::resource('/banners', BannerController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/galleries', GalleryController::class);
    Route::resource('/images', GalleryImageController::class);
    Route::resource('/pages', PageController::class);
    Route::resource('/faqs', FaqController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/projects', ProjectController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/json', JsonController::class);
<<<<<<< HEAD
=======
    Route::resource('/events', EventController::class);
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4

    Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');

    Route::get('/settings', [SettingController::class, 'edit'])->name('settings');
    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');
    Route::post('/settings-social', [SettingController::class, 'social'])->name('settings.social');
    Route::post('/settings-contact', [SettingController::class, 'contact'])->name('settings.contact');
    Route::post('/settings-style', [SettingController::class, 'style'])->name('settings.style');

    Route::get('/queries', [QueryController::class, 'index'])->name('queries.index');
<<<<<<< HEAD
=======
    Route::get('/notifications', [QueryController::class, 'notifications'])->name('queries.notifications');
    Route::post('/notifications', [QueryController::class, 'markAsRead'])->name('queries.markAsRead');
>>>>>>> fa582ccc30c5c5f275c37646d78258783be695f4
});
