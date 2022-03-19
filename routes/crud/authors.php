<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;


Route::get('/authors', [AuthorController::class, 'findAllAuthors']);
Route::get('/authors/{id}', [AuthorController::class, 'findAuthorById']);
Route::post('/authors', [AuthorController::class, 'createAuthor']);
Route::put('/authors', [AuthorController::class, 'updateAuthor']);
Route::delete('/authors', [AuthorController::class, 'deleteAuthor']);
