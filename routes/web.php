<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'showHome')->name('home');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'showIndex'])->name('admin_home');

    Route::prefix('/categories')->group(function () {
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/', 'index')->name('admin_category_index');
            Route::get('/create', 'create')->name('admin_category_create');
            Route::post('/store', 'store')->name('admin_category_store');
            Route::get('/{id}', 'show')->name('admin_category_show');
            Route::get('/{id}/edit', 'edit')->name('admin_category_edit');
            Route::patch('/{id}', 'update')->name('admin_category_update');
            Route::delete('/{id}', 'delete')->name('admin_category_delete');
        });
    });

    Route::prefix('/posts')->group(function () {
        Route::controller(PostController::class)->group(function () {
            Route::get('/', 'index')->name('admin_post_index');
            Route::get('/create', 'create')->name('admin_post_create');
            Route::post('/store', 'store')->name('admin_post_store');
            Route::get('/{id}', 'show')->name('admin_post_show');
            Route::get('/{id}/edit', 'edit')->name('admin_post_edit');
            Route::patch('/{id}', 'update')->name('admin_post_update');
            Route::delete('/{id}', 'delete')->name('admin_post_delete');
        });
    });
});

Auth::routes();

