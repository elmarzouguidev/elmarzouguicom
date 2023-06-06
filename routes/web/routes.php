<?php

use App\Http\Controllers\Admin\Blog\Category\CreateCategoryController;
use App\Http\Controllers\Admin\Blog\Category\EditCategoryController;
use App\Http\Controllers\Admin\Blog\Category\ListCategoryController;
use App\Http\Controllers\Admin\Blog\Category\ShowCategoryController;
use App\Http\Controllers\Admin\Blog\Post\CreatePostController;
use App\Http\Controllers\Admin\Blog\Post\EditPostController;
use App\Http\Controllers\Admin\Blog\Post\ListPostController;
use App\Http\Controllers\Admin\Blog\Post\ShowPostController;
use App\Http\Controllers\Admin\Blog\Tag\CreateTagController;
use App\Http\Controllers\Admin\Blog\Tag\EditTagController;
use App\Http\Controllers\Admin\Blog\Tag\ListTagController;
use App\Http\Controllers\Admin\Blog\Tag\ShowTagController;
use App\Http\Controllers\Admin\Home\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix(config('app.admin_url'))->as('admin:')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('categories')->as('category:')->group(function () {

        Route::get('/', [ListCategoryController::class])->name('list');
        Route::get('/create', [CreateCategoryController::class])->name('create');
        Route::post('/create', [CreateCategoryController::class, 'store'])->name('create.store');
        Route::get('/show/{category}', [ShowCategoryController::class])->name('show');
        Route::get('/edit/{category}', [EditCategoryController::class])->name('edit');
        Route::post('/edit/{category}', [EditCategoryController::class, 'update'])->name('edit.update');
    });

    Route::prefix('tags')->as('tag:')->group(function () {

        Route::get('/', [ListTagController::class])->name('list');
        Route::get('/create', [CreateTagController::class])->name('create');
        Route::post('/create', [CreateTagController::class, 'store'])->name('create.store');
        Route::get('/show/{tag}', [ShowTagController::class])->name('show');
        Route::get('/edit/{tag}', [EditTagController::class])->name('edit');
        Route::post('/edit/{tag}', [EditTagController::class, 'update'])->name('edit.update');
    });

    Route::prefix('posts')->as('post:')->group(function () {

        Route::get('/', [ListPostController::class])->name('list');
        Route::get('/create', [CreatePostController::class])->name('create');
        Route::post('/create', [CreatePostController::class, 'store'])->name('create.store');
        Route::get('/show/{post}', [ShowPostController::class])->name('show');
        Route::get('/edit/{post}', [EditPostController::class])->name('edit');
        Route::post('/edit/{post}', [EditPostController::class, 'update'])->name('edit.update');
    });
});



/******* Auth Routes ******/
Route::prefix('auth')->as('auth:')->group(function () {
    require base_path('routes/web/auth.php');
});
