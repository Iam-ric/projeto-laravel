<?php

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

use App\Http\Controllers\BookController;

Route::get('/', [BookController::class,'index']); 
Route::get('/books/create', [BookController::class,'create'])->middleware('auth');
Route::get('/books/{id}', [BookController::class,'show']);
Route::post('/books', [BookController::class, 'store']);
Route::delete('/books/{id}', [BookController::class, 'destroy'])->middleware('auth');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit')->middleware('auth');

Route::get('/dashboard', [BookController::class, 'dashboard'])->middleware('auth');
