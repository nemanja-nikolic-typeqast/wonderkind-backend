<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\DeleteBookRequest;
use App\Http\Requests\Book\SaveBookRequest;
use App\Models\Book;
use App\Repository\BookRepository;
use Illuminate\Database\Eloquent\Collection;

class BookController extends Controller
{
    private BookRepository $bookRepository;

    public function __construct()
    {
        $this->bookRepository = new BookRepository();
    }

    public function findAllBooks(): Collection|array
    {
        return $this->bookRepository->findAll();
    }

    public function findAllBooksWithAuthors(): Collection
    {
        return $this->bookRepository->findAllBooksWithAuthors();
    }

    public function findBookById(int $id): Book
    {
        return $this->bookRepository->findOneById($id);
    }

    public function createBook(SaveBookRequest $request): Book
    {
        return $this->bookRepository->saveRaw(
            $request->title,
            $request->author_id,
            $request->amount,
            $request->short_description
        );
    }

    public function updateBook(SaveBookRequest $request): Book
    {
        return $this->bookRepository->saveRaw(
            $request->title,
            $request->author_id,
            $request->amount,
            $request->short_description,
            $request->id
        );
    }

    public function deleteBook(DeleteBookRequest $request): void
    {
        $this->bookRepository->delete($request->id);
    }
}
