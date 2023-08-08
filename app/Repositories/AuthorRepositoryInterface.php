<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface AuthorRepositoryInterface
{
    public function getAllAuthors() : Collection;
    public function getAuthorById($id);
    public function createAuthor(array $attributes);
    public function updateAuthor($id, array $attributes);
    public function deleteAuthor($id);
}
