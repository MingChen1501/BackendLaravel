<?php

namespace App\Services;

use App\Repositories\TextRepositoryInterface;

class TextService
{
    public function __construct(protected TextRepositoryInterface $textRepository)
    {
    }
    public function getAll()
    {
        return $this->textRepository->getAll();
    }
    public function getById($id)
    {
        return $this->textRepository->getById($id);
    }
}
