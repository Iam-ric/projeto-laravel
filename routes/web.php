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
Route::get('/dashboard', [BookController::class, 'dashboard'])->middleware('auth');
Route::get('/books/edit/{id}', [BookController::class, 'edit'])->middleware('auth');

Route::get('/books', [BookController::class, 'storePeople'])->middleware('auth');
Route::get('/profile/create', [BookController::class, 'create'])->middleware('auth');
Route::delete('/profile/{id}', [BookController::class, 'destroy'])->middleware('auth');
Route::get('/profile/edit/{id}', [BookController::class, 'edit'])->middleware('auth');

//  novas alterações
Route::get('/pessoas/create', [PessoaController::class,'create'])->middleware('auth');
Route::get('/pessoas/{id}', [PessoaController::class,'show']);
Route::post('/pessoas', [PessoaController::class, 'store']);
Route::delete('/pessoas/{id}', [PessoaController::class, 'destroy'])->middleware('auth');
Route::get('/pessoas/dashboard', [PessoaController::class, 'dashboard'])->middleware('auth');
Route::get('/pessoas/edit/{id}', [PessoaController::class, 'edit'])->middleware('auth');
