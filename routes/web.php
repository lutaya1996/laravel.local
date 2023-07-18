<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'show'])->name('home');

Route::middleware('guest')->group(function ()  {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::get('/catalog', [CatalogController::class,'index'])->name('catalog');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog{article}', [BlogController::class, 'show'])->name('blog.show');




