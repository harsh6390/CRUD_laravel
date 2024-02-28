<?php

use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('create', [ProductController::class, 'create'])->name('product.create');
Route::post('store', [ProductController::class, 'store'])->name('product.store');
Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::get('/{id}/delete', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/{id}/show', [ProductController::class, 'show'])->name('product.show');
