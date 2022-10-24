<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ShopController::class, 'index']);
Route::get('/detail/{id}', [ShopController::class, 'detail'])->name('detail');

Route::get('/thanks', function () {
    return view('thanks');
});

Route::get('/mypage', [ShopController::class, 'mypage'])->name('mypage');

/**
Route::get('/check', [ShopController::class, 'check']);
*/

require __DIR__.'/auth.php';
