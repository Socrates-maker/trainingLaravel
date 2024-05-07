<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [home::class, 'welcome']);
Route::get('/home',[home::class, 'index']);
Route::get('/home/number',[home::class, 'getValue']);

Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/store',[PostController::class, 'store']);
Route::post('/posts/store',[PostController::class, 'store'])->name('storePost');

