<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\authorController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\postController;
use App\Http\Controllers\composeMailController;
use App\Http\Controllers\videoController;
use App\Http\Controllers\subscriptionController;
use App\Http\Controllers\broadcastController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\endUserController;

use App\Http\Controllers\courseController; 
use App\Http\Controllers\topicsController;

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

Route::get('/', [pagesController::class, 'index']);
Route::get('/home', [pagesController::class, 'index']);
Route::get('/about-us', [pagesController::class, 'aboutUs']);
Route::get('/contact-us', [pagesController::class, 'contactUs']);
Route::get('/blog', [pagesController::class, 'blog']);
Route::get('/faqs', [pagesController::class, 'faqs']);

Route::resource('subscription', subscriptionController::class);
Route::resource('message', messageController::class);

//................ ADMIN ROUTES ...................................

Route::get('/admin', [pagesController::class, 'admin']);
Route::resource('author', authorController::class);
//Route::resource('mycategory', categoryController::class);

Route::resource('post', postController::class);
Route::resource('video', videoController::class);
Route::resource('endUser', endUserController::class);

// Route::resource('endUser', endUserController::class);
Route::resource('broadcast', broadcastController::class);
Route::get('/compose-email', [composeMailController::class, 'create'])->name('composeMail.create');
Route::post('compose-email', [composeMailController::class, 'store'] )->name('composeMail.store');

Route::get('/courses', [pagesController::class, 'courses'])->name('courses');
//...........google OAuth Consent Screen.................
Route::get('redirect', [SocialController::class, 'redirect']);
Route::get('callback', [SocialController::class, 'callback']);




Route::resource('course', courseController::class);
Route::resource('topic', topicsController::class);