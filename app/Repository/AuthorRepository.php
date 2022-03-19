<?php

namespace App\Repository;

use App\Http\Requests\Author\SaveAuthorRequest;
use App\Models\Author;
use Illuminate\Database\Eloquent\Collection;
use League\CommonMark\Extension\CommonMark\Node\Block\ThematicBreak;

class AuthorRepository
{
    public function findAll(): Collection|array
    {
        return Author::all();
    }

    public function findAuthorsWithBookCount(): Collection
    {
        return Author::withCount(['books'])->get();
    }

    public function findOneById(int $id): Author
    {
        return Author::findOrFail($id);
    }

    public function saveAuthor(Author $author): Author
    {
        $author->save();
        return $author;
    }

    public function saveRaw(string $firstName, string $lastName, $id = null): Author
    {
        $author = new Author();

        if($id){
            $author = $this->findOneById($id);
        }

        $author->first_name = $firstName;
        $author->last_name = $lastName;

        return $this->saveAuthor($author);
    }

    public function delete(int $id): void
    {
        Author::destroy($id);
    }
}
