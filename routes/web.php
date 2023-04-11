<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisteredController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::view('/','welcome')->name('home');
Route::view('/contacto','contact')->name('contact');

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show']);
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::view('/about','about')->name('about');

Route::get('/login',function(){
return 'Login';
})->name('login');

Route::view('/login','login')->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::view('/register','registro')->name('registro');
Route::post('/register', [RegisteredController::class, 'store']);

