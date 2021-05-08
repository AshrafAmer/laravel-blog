<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontArticleController;
use App\Http\Controllers\FrontCommentController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin-panel')->group(function () {
    Auth::routes();
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.list.categories');
    Route::get('/articles', [ArticleController::class, 'index'])->name('admin.list.articles');
    Route::get('/comments', [CommentController::class, 'index'])->name('admin.list.comments');
    Route::get('/add-category', [CategoryController::class, 'create'])->name('admin.get.add.category');
    Route::get('/add-article', [ArticleController::class, 'create'])->name('admin.get.add.article');
    Route::post('/stroe-category', [CategoryController::class, 'store'])->name('admin.post.store.category');
    Route::post('/store-article', [ArticleController::class, 'store'])->name('admin.post.store.article');
    Route::delete('/destroy-category/{category}', [CategoryController::class, 'destroy'])->name('admin.delete.category');
    Route::delete('/destroy-article/{article}', [ArticleController::class, 'destroy'])->name('admin.delete.article');
    Route::delete('/destroy-comment/{comment}', [CommentController::class, 'destroy'])->name('admin.delete.comment');
    Route::get('/edit-category/{category}', [CategoryController::class, 'edit'])->name('admin.edit.category');
    Route::get('/edit-article/{article}', [ArticleController::class, 'edit'])->name('admin.edit.article');
    Route::get('/edit-comment/{comment}', [CommentController::class, 'edit'])->name('admin.edit.comment');
    Route::put('/update-category/{category}', [CategoryController::class, 'update'])->name('admin.update.category');
    Route::put('/update-article/{article}', [ArticleController::class, 'update'])->name('admin.update.article');
    Route::put('/update-comment/{comment}', [CommentController::class, 'update'])->name('admin.update.comment');
});

Route::get('/', [FrontArticleController::class, 'index'])->name('home');
Route::get('/show-article/{article}', [FrontArticleController::class, 'show'])->name('get.single.article');
Route::post('/store-comment', [FrontCommentController::class, 'store'])->name('post.comment');