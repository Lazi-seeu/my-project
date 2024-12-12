<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ArticleController;

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

Route::resource('articles', \App\Http\Controllers\ArticleController::class);
Route::get('/', [\App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::post('articles', [\App\Http\Controllers\ArticleController::class, 'store'])->name('articles.store');
Route::get('articles/{article}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');
Route::get('articles/{article}/edit', [\App\Http\Controllers\ArticleController::class, 'edit'])->name('articles.edit');
Route::get('articles/{article}/delete', [\App\Http\Controllers\ArticleController::class, 'destroy'])->name('articles.destroy');
Route::post('articles/search', [\App\Http\Controllers\ArticleController::class, 'search'])->name('articles.search');
