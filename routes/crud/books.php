<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/books', [BookController::class, 'findAllBooks']);
Route::get('/books/{id}', [BookController::class, 'findBookById']);
Route::post('/books', [BookController::class, 'createBook']);
Route::put('/books', [BookController::class, 'updateBook']);
Route::delete('/books', [BookController::class, 'deleteBook']);
