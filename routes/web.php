<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'show']);

Route::get('/articles', [ArticleController::class, 'showAll']);

Route::get('/articles/{slug}', [ArticleController::class, 'showOne',]);

Route::match(['get', 'post'], '/login', [LoginController::class, 'form']);

Route::match(['get', 'post'], '/register', [RegisterController::class, 'form']);
