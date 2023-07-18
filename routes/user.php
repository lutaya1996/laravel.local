<?php
use App\Http\Controllers\Articles\CommentController;
use Illuminate\Support\Facades\Route;


Route::get('/articles/{article}/comments', [CommentController::class, 'index'])->name('comments.index');

Route::get('/articles/{article}/comments/create', [CommentController::class, 'create'])->name('comments.create');

Route::post('/articles/{article}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/articles/{article}/comments/{slug}', [CommentController::class, 'create'])->name('comments.show');

Route::get('/articles/{article}/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');

Route::put('/articles/{article}/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');

Route::get('/articles/{article}/comments/{comment}', [CommentController::class, 'delete'])->name('comments.delete');
