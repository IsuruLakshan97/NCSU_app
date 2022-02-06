<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->middleware('auth');

Route::get('/person/{batch}', [App\Http\Controllers\PersonController::class, 'index'])->middleware('auth');

Route::get('/catalogue', [App\Http\Controllers\catalogueController::class, 'index'])->name('catalogue.index');

Route::get('/forum/create', [App\Http\Controllers\ForumController::class, 'create']);

Route::post('/forum', [App\Http\Controllers\ForumController::class, 'store'])->name('forum.store');

// Route that can be only accesed by the super admin
Route::group(['middleware' => ['auth', 'admin']], function() {
    // your routes
    Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');

    Route::get('/profile/create', [App\Http\Controllers\ProfileController::class, 'create']);

    Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'delete'])->name('profile.destroy');

    Route::post('/faculty', [App\Http\Controllers\FacultyController::class, 'store'])->name('faculty.store');

    Route::get('/faculty/create', [App\Http\Controllers\FacultyController::class, 'create']);
});

