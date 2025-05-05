<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/posts/mylist',[PostController::class,'user_index'])->name('posts.mylist');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('/posts')->group(function(){
        Route::get('/',[PostController::class,'index'])->name('posts.list');

        Route::get('/edit',[PostController::class,'edit'])->name('posts.edit');
        Route::post('/',[PostController::class,'store'])->name('posts.store');

        Route::get('/{id}/edit',[PostController::class,'edit'])->name('posts.edit.id');
        Route::put('/{id}/edit',[PostController::class,'update'])->name('posts.update');

        Route::get('/{id}',[PostController::class,'show'])->name('posts.show');

        Route::delete('/{id}',[PostController::class,'destroy'])->name('posts.destroy');
    });

});



Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

require __DIR__.'/auth.php';
