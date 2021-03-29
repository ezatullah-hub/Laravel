<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return view('home');
})->name('home');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::post('/logout',[LogoutController::class,'store'])->name('logout');
Route::get('/posts',[PostController::class,'getPost'])->name('posts')->middleware('auth');
Route::get('/add-posts',[PostController::class,'addPost']);
Route::post('/create-post',[PostController::class,'createPost'])->name('post.create');
Route::get('/posts/{id}',[PostController::class,'getPostById']);
Route::get('/delete-post/{id}',[PostController::class,'deletePost']);
Route::get('/edit-post/{id}',[PostController::class,'editPost']);
Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');