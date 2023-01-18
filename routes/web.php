<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'showHome')->name('home');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/index', 'showHome')->name('admin_home');
});

//Route::get('/', function () {
//    return view('home', [HomeController::class]);
//})->name('home');

Auth::routes();

