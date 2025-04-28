<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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

    Route::get('/posts/list',[PostController::class,'index'])->name('posts.list');
    //Route::get('/posts/mylist',[PostController::class,'user_index'])->name('posts.mylist');

    Route::get('/posts/edit',[PostController::class,'edit'])->name('posts.edit');
    Route::get('/posts/edit/{id}',[PostController::class,'edit'])->name('posts.edit.id');
    Route::post('/posts/edit/{id}',[PostController::class,'update'])->name('posts.update');


    Route::post('/posts/edit',[PostController::class,'store'])->name('posts.store');


    Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');

    Route::delete('/posts/{id}',[PostController::class,'destroy'])->name('posts.destroy');
});

require __DIR__.'/auth.php';
