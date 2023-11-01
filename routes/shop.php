<?php

use App\Http\Controllers\PagesController;
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

Route::domain('shop.' . config('app.url'))->group(function () {
    Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
    Route::get('/products', [PagesController::class, 'products'])->name('products');
});
