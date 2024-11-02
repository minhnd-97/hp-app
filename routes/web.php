<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");

Route::get('/san-pham', [HomeController::class, 'product']);

Route::get('/gioi-thieu', [HomeController::class, 'introduct']);

Route::get('/he-thong-phan-phoi', [HomeController::class, 'info']);

Route::get('/cong-trinh', [HomeController::class, 'image']);


Route::get('/tin-tuc/tin-cong-ty', [NewsController::class, 'indexCompany']);

Route::get('/tin-tuc', [NewsController::class, 'index']);
Route::get('/tin-tuc/{id}', [NewsController::class, 'detail'])->name("new.detail");

