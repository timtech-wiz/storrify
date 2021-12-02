<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoriesController;
use App\Http\Middleware\CheckAdmin;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',  [App\Http\Controllers\Auth\LoginController::class, 'login']);


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function(){
  
//    Route::get('/stories', [App\Http\Controllers\StoriesController::class, 'index'])->name('stories.index');
//    Route::get('/stories/{story}', [App\Http\Controllers\StoriesController::class, 'show'])->name('stories.show');
    Route::resource('stories', StoriesController::class);
    Route::get('/edit-profile', [App\Http\Controllers\ProfilesController::class, 'editProfile'])->name('profile.edit');
    
     Route::put('/edit-profile/{user}', [App\Http\Controllers\ProfilesController::class, 'updateProfile'])->name('profile.update');
    
});

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
 Route::get('/story/{activeStory:slug}', [App\Http\Controllers\DashboardController::class, 'show'])->name('dashboard.show');



 Route::get('/email', [App\Http\Controllers\DashboardController::class, 'email'])->name('dashboard.email');


Route::namespace('Admin')->name('admin.stories.')->prefix('admin')->middleware('auth', CheckAdmin::class)->group(function(){
  
    Route::get('/deleted_stories', [App\Http\Controllers\Admin\StoriesController::class, 'index'])->name('index');
    Route::put('/stories/restore/{id}', [App\Http\Controllers\Admin\StoriesController::class, 'restore'])->name('restore');
    
    Route::delete('/stories/delete/{id}', [App\Http\Controllers\Admin\StoriesController::class, 'delete'])->name('delete');
    
    Route::get('/stories/stats', [App\Http\Controllers\Admin\StoriesController::class, 'stats'])->name('stats');
    
});


Route::get('/image', function(){
    $image_path = public_path('storage/new.jpg');
    $writePath = public_path('storage/thumbnail.jpg');
    $img = Image::make($image_path)->resize(255, 100);
    $img->save($writePath);
    return $img->response('jpg');
});

