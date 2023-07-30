<?php
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CommentController;
use Illuminate\Support\Facades\Route;

//Route::prefix('admin')->middleware('auth')->group(function () {

Route::prefix('admin')->group(function () {

    Route::redirect('/', '/admin/articles')->name('admin');


    Route::get('/articles', [ArticleController::class, 'index'])->name('admin.articles');

    Route::get('/articles/create', [ArticleController::class, 'create'])->name('admin.articles.create');

    Route::post('/articles', [ArticleController::class, 'store'])->name('admin.articles.store');

    Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('admin.articles.show');

    Route::get('/articles/{slug}/edit', [ArticleController::class, 'edit'])->name('admin.articles.edit');

    Route::put('/articles/{slug}', [ArticleController::class, 'update'])->name('admin.articles.update');

    Route::delete('/articles/{slug}', [ArticleController::class, 'delete'])->name('admin.articles.delete');



    Route::get('/articles/{article}/comments', [CommentController::class, 'index'])->name('comments.index');

    Route::get('/articles/{article}/comments/create', [CommentController::class, 'create'])->name('comments.create');

    Route::post('/articles/{article}/comments', [CommentController::class, 'store'])->name('comments.store');

    Route::get('/articles/{article}/comments/{slug}', [CommentController::class, 'create'])->name('comments.show');

    Route::get('/articles/{article}/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');

    Route::put('/articles/{article}/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');

    Route::get('/articles/{article}/comments/{comment}', [CommentController::class, 'delete'])->name('comments.delete');

});


