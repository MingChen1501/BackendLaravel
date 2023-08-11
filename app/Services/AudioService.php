<?php

namespace App\Services;

use App\Repositories\AudioRepositoryInterface;

class AudioService
{
    public function __construct(protected AudioRepositoryInterface $audioRepository)
    {

    }
    public function getAll()
    {
        return $this->audioRepository->getAll();
    }

    public function getAllWithParams(array|string $queryParams)
    {
        return null;
    }
    public function getById($id) {
        return $this->audioRepository->getById($id);
    }
}
