<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/', [ShopController::class, 'index']);
Route::get('/detail/{id}}', [ShopController::class, 'detail'])->name('detail');