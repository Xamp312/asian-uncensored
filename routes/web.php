<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
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
Route::get('/', [HomeController::class, 'landingPage'])->name('landingPage');

Route::get('/videos/latest', [VideoController::class, 'latestVideos'])->name('latestVideos');

Route::get('/video/upload', [VideoController::class, 'videoUploadPage'])->name('videoUploadPage');
Route::get('/video/{slug}', [VideoController::class, 'videoPage'])->name('videoPage');

Route::post('/video/react', [VideoController::class, 'videoReact'])->name('videoReact');
Route::post('/video/rate', [VideoController::class, 'videoRate'])->name('videoRate');

Route::post('/video/upload', [VideoController::class, 'upload'])->name('videoUpload');

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/settings', function () {
    return view('pages.settings');
});

Route::get('/community', function () {
    return view('pages.community');
});

Route::get('/profile', function () {
    return view('pages.profile');
});
