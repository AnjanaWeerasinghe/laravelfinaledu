<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\welcomecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[welcomecontroller::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//post
Route::post('/posts/store',[PostController::class, 'store'])->name('posts.store');

