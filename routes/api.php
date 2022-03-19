<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ReservationController;

Route::group([], __DIR__.'/crud/authors.php');
Route::group([], __DIR__.'/crud/books.php');

// API should allow to get list of Books with Authors
Route::get('/books-with-authors', [BookController::class, 'findAllBooksWithAuthors']);

// API should allow to reserve a book (check if there are such book in DB, and if there are enough books in stock)
Route::post('/reserve-book', [ReservationController::class, 'reserveBooks']);

// API to Get a list of Authors with Book stock count
Route::get('/authors-with-book-count', [AuthorController::class, 'findAuthorsWithBookCount']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
