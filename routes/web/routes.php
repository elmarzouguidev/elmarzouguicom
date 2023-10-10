<?php

use App\Http\Controllers\Admin\Blog\Category\CategoryController;
use App\Http\Controllers\Admin\Blog\Post\PostController;
use App\Http\Controllers\Admin\Blog\Tag\TagController;
use App\Http\Controllers\Admin\Home\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('welcome');
});

Route::prefix(config('app.admin_url'))->as('admin:')->middleware('auth')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('categories')->as('category:')->group(function () {

        Route::get('/', [CategoryController::class, 'index'])->name('list');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/create', [CategoryController::class, 'store'])->name('create.store');
        Route::get('/show/{category}', [CategoryController::class, 'show'])->name('show');
        Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/edit/{category}', [CategoryController::class, 'update'])->name('edit.update');
    });

    Route::prefix('tags')->as('tag:')->group(function () {

        Route::get('/', [TagController::class, 'index'])->name('list');
        Route::get('/create', [TagController::class, 'create'])->name('create');
        Route::post('/create', [TagController::class, 'store'])->name('create.store');
        Route::get('/show/{tag}', [TagController::class, 'show'])->name('show');
        Route::get('/edit/{tag}', [TagController::class, 'edit'])->name('edit');
        Route::post('/edit/{tag}', [TagController::class, 'update'])->name('edit.update');
    });

    Route::prefix('posts')->as('post:')->group(function () {

        Route::get('/', [PostController::class, 'index'])->name('list');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('/create', [PostController::class, 'store'])->name('create.store');
        Route::get('/show/{post}', [PostController::class, 'show'])->name('show');
        Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit');
        Route::post('/edit/{post}', [PostController::class, 'update'])->name('edit.update');
    });
});



/******* Auth Routes ******/
Route::prefix('auth')->as('auth:')->group(function () {
    require base_path('routes/web/auth.php');
});
