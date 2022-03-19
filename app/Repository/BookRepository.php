<?php

namespace App\Repository;

use App\Http\Requests\Book\SaveBookRequest;
use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;

class BookRepository
{
    public function findAll(): Collection|array
    {
        return Book::all();
    }

    public function findAllBooksWithAuthors(): Collection
    {
        return Book::with(['author'])->get();
    }

    public function findOneById(int $id): Book
    {
        return Book::findOrFail($id);
    }

    public function saveBook(Book $book): Book
    {
        $book->save();
        return $book;
    }

    public function saveRaw(string $title, int $authorId, int $amount, string $shortDescription, $id = null): Book
    {
        $book = new Book();

        if($id){
            $book = $this->findOneById($id);
        }

        $book->title = $title;
        $book->author_id = $authorId;
        $book->amount = $amount;
        $book->short_description = $shortDescription;

        return $this->saveBook($book);
    }

    public function delete(int $id): void
    {
        Book::destroy($id);
    }
}
