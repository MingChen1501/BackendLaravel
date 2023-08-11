<?php

namespace App\Services;

use App\Repositories\AuthorRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class AuthorService
{
    public function __construct(protected AuthorRepositoryInterface $authorRepository)
    {

    }
    public function getAllAuthors() : Collection
    {
        return $this->authorRepository->getAllAuthors();
    }
    public function getAuthorById($id)
    {
        return $this->authorRepository->getAuthorById($id);
    }
    public function createAuthor(array $attributes) : string
    {
        return $this->authorRepository->createAuthor($attributes)->id;
    }
    public function updateAuthor($id, array $attributes): bool
    {
        if ($this->getAuthorById($id))
            return $this->authorRepository->updateAuthor($id, $attributes);
        return false;
    }
    public function deleteAuthor($id) : bool
    {
        if ($this->getAuthorById($id))
            return $this->authorRepository->deleteAuthor($id);
        return false;
    }
}
