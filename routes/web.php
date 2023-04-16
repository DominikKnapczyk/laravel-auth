<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [GuestHomeController::class, 'index']);

Route::get('/dashboard', [AdminHomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')
    ->prefix('/admin')
    ->name('admin.')
    ->group(function() {
        Route::resource('posts', PostController::class)
        ->parameters(['posts' => 'post:slug']);
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/posts/create', 'App\Http\Controllers\Admin\PostController@create')->name('admin.posts.create');


require __DIR__.'/auth.php';