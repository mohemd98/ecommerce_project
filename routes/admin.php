<?php

use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\SettingController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Route::get('/index',[App\Http\Controllers\Dashboard\IndexController::class , 'index'])->name('admin');
//Route::put('settings/{setting}/update',[App\Http\Controllers\Dashboard\SettingController::class , 'update'])->name('dashboard.settings.update');
//Route::get('settings',[App\Http\Controllers\Dashboard\SettingController::class , 'index'])->name('dashboard.settings.index');


Route::get('/index',[App\Http\Controllers\Dashboard\IndexController::class , 'index'])->name('admin');

Route::group(['as' => 'dashboard.'], function () {
    Route::put('settings/{setting}/update',[App\Http\Controllers\Dashboard\SettingController::class , 'update'])->name('settings.update');
    Route::get('settings',[App\Http\Controllers\Dashboard\SettingController::class , 'index'])->name('settings.index');
    Route::get('categories/ajax',[App\Http\Controllers\Dashboard\CategoryController::class , 'getall'])->name('categories.getall');
    Route::delete('categories/delete',[App\Http\Controllers\Dashboard\CategoryController::class , 'delete'])->name('categories.delete');
    Route::resource('categories', App\Http\Controllers\Dashboard\CategoryController::class)->except('destroy','create' , 'show');
    Route::get('products/ajax',[App\Http\Controllers\Dashboard\ProductController::class , 'getall'])->name('products.getall');
    Route::resource('products', App\Http\Controllers\Dashboard\ProductController::class)->except('show');

});
