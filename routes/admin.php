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


Route::get('/index',[App\Http\Controllers\Dashboard\IndexController::class , 'index'])->name('admin');
Route::put('settings/{setting}/update',[App\Http\Controllers\Dashboard\SettingController::class , 'update'])->name('dashboard.settings.update');
Route::get('settings',[App\Http\Controllers\Dashboard\SettingController::class , 'index'])->name('dashboard.settings.index');
