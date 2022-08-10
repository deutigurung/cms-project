<?php

use App\Http\Controllers\AuthController;
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

Route::get('/events', [App\Http\Controllers\FrontendController::class, 'events'])->name('front.events');
Route::get('/events/{slug}', [App\Http\Controllers\FrontendController::class, 'eventBySlug'])->name('front.eventBySlug');


Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    /**
     * Email Verification Routes
     */
    Route::get('/email/verify',[App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}',[App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend',[App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');
});

/**
 * Passport Reset Routes
 */
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{page_url}', [App\Http\Controllers\FrontendController::class, 'pageByUrl'])->name('front.pageByUrl');

