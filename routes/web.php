<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhvienController;

Route::get('/', [SinhvienController::class, 'index']);
Route::resource('sinhvien', SinhvienController::class);
