<?php

namespace App\Http\Controllers;

use App\Http\Requests\Author\DeleteAuthorRequest;
use App\Http\Requests\Author\SaveAuthorRequest;
use App\Models\Author;
use App\Repository\AuthorRepository;
use Illuminate\Database\Eloquent\Collection;

class AuthorController extends Controller
{
    private AuthorRepository $authorRepository;

    public function __construct()
    {
        $this->authorRepository = new AuthorRepository();
    }

    public function findAllAuthors(): Collection|array
    {
        return $this->authorRepository->findAll();
    }

    public function findAuthorsWithBookCount(): Collection
    {
        return $this->authorRepository->findAuthorsWithBookCount();
    }

    public function findAuthorById(int $id): Author
    {
        return $this->authorRepository->findOneById($id);
    }

    public function createAuthor(SaveAuthorRequest $request): Author
    {
        return $this->authorRepository->saveRaw(
            $request->first_name,
            $request->last_name
        );
    }

    public function updateAuthor(SaveAuthorRequest $request): Author
    {
        return $this->authorRepository->saveRaw(
            $request->first_name,
            $request->last_name,
            $request->id
        );
    }

    public function deleteAuthor(DeleteAuthorRequest $request): void
    {
        $this->authorRepository->delete($request->id);
    }
}
