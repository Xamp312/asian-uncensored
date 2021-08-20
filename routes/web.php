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
Route::get('/video', [VideoController::class, 'videoPage'])->name('videoPage');
Route::get('/video/upload', [VideoController::class, 'videoUploadPage'])->name('videoUploadPage');

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});
