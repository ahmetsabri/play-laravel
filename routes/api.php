<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class,'index'])->name('posts')->withTrashed();

Route::get('/post/{post}', [PostController::class,'show'])->withTrashed();
