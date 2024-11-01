<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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
Route::get('', [FrontController::class, 'index'])->name('home-page');
Route::get('/about',[FrontController::class, 'about'])->name('about-page');
Route::get('/blog',[FrontController::class, 'blog'])->name('blog-page');
Route::get('/event',[FrontController::class, 'event'])->name('event-page');
Route::get('/community',[FrontController::class, 'community'])->name('community-page');
Route::get('/contact',[FrontController::class, 'contact'])->name('contact-page');
Route::get('/buildafrika',[FrontController::class, 'buildafrika'])->name('buildafrika-page');
Route::get('/gallery',[FrontController::class, 'gallery'])->name('gallery-page');
Route::get('/course',[FrontController::class, 'course'])->name('course-page');
Route::get('/courses/{Coursecategory}',[FrontController::class, 'showByCategory'])->name('courses.showByCategory');
Route::get('/service',[FrontController::class, 'services'])->name('service-page');
Route::get('event/details/{event}', [FrontController::class, 'eventDetails'])->name('event-details');
Route::get('blog/details/{post}', [FrontController::class, 'postDetails'])->name('post-details');
Route::get('course/details/{course}', [FrontController::class, 'courseDetails'])->name('course-details');
Route::get('event/registration', [FrontController::class,'registerPage'])->name('event-registration');
Route::post('event/registration/store', [PaymentController::class, 'ahteStore'])->name('registration.payment');
Route::post('event/registration/payment/initialize', [PaymentController::class, 'initialize'])->name('registration.payment.initialize');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
Route::get('/registration/AHTES24', [FrontController::class, 'registeration'])->name('register-page');
Route::get('/registration/AHTES24/visitor', [FrontController::class, 'register1'])->name('register-visitor');
Route::get('/registration/AHTES24/regular-delegate', [FrontController::class, 'register2'])->name('register-regular');
Route::get('/registration/AHTES24/delegate', [FrontController::class, 'register3'])->name('register-delegate');
Route::get('/registration/AHTES24/premium-delegate', [FrontController::class, 'register4'])->name('register-premium');
Route::get('/search', [FrontController::class,'search'])->name('search');


require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
Auth::routes();
