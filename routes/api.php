<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('posts',[PostController::class,'index']);

Route::get('posts/top',[PostController::class,'top']);

Route::post('posts/store',[PostController::class,'store']);

Route::post('posts/{post}/addReview',[PostController::class,'addReview']);