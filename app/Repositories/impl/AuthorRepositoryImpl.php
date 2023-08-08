<?php

namespace App\Repositories\impl;

use App\Models\Story;
use App\Repositories\AuthorRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class AuthorRepositoryImpl implements AuthorRepositoryInterface
{
    public function __construct(protected Story $story)
    {

    }
    public function getAllAuthors() : Collection
    {
        return $this->story->all();
    }

    public function getAuthorById($id)
    {
        return $this->story->find($id);
    }

    public function createAuthor(array $attributes)
    {
        return $this->story->create($attributes);
    }

    public function updateAuthor($id, array $attributes)
    {
        return $this->story->find($id)->update($attributes);
    }

    public function deleteAuthor($id)
    {
        return $this->story->find($id)->delete();
    }
}
