<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [BookController::class, 'index'])->name('homepage');
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.getDetail');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.getDetail');
Route::get('/publisher', [PublisherController::class, 'index'])->name('publisher.showAll');
Route::get('/publisher/{id}', [PublisherController::class, 'show'])->name('publisher.getDetail');
Route::get('/contact', [BookController::class, 'showContactPage'])->name('contact');