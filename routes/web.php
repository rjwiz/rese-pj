<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\LikeController;
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
Route::POST('/', [ShopController::class, 'search']);
Route::get('/detail/{shop_id}', [ShopController::class, 'detail'])->name('detail');


Route::POST('/reservation', [ReservationController::class, 'create']) -> middleware(['auth'])->name('reservation');
Route::POST('reservation/delete', [ReservationController::class, 'delete'])->middleware(['auth'])->name('reservation/delete');


Route::get('/done', function () {
    return view('done');
});

Route::get('/like/{shop_id}', [LikeController::class, 'create'])->middleware(['auth'])->name('like');
Route::get('/like/delete/{shop_id}', [LikeController::class, 'delete'])->middleware(['auth'])->name('like/delete');


Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');
Route::get('/thanks', function () {
    return view('thanks');
});

/*
Route::get('/check', [ShopController::class, 'check']);
*/

require __DIR__.'/auth.php';
