<?php
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CommentController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::redirect('/admin', '/admin/articles')->name('admin');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

    Route::get('/articles/{slug}', [ArticleController::class, 'create'])->name('articles.show');

    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

    Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');

    Route::get('/articles/{article}', [ArticleController::class, 'delete'])->name('articles.delete');


    Route::get('/articles/{article}/comments', [CommentController::class, 'index'])->name('comments.index');

    Route::get('/articles/{article}/comments/create', [CommentController::class, 'create'])->name('comments.create');

    Route::post('/articles/{article}/comments', [CommentController::class, 'store'])->name('comments.store');

    Route::get('/articles/{article}/comments/{slug}', [CommentController::class, 'create'])->name('comments.show');

    Route::get('/articles/{article}/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');

    Route::put('/articles/{article}/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');

    Route::get('/articles/{article}/comments/{comment}', [CommentController::class, 'delete'])->name('comments.delete');

});


