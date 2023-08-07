<?php

namespace App\Services;

use App\Repository\PageRepositoryInterface;

class PageService
{
    public function __construct(protected PageRepositoryInterface $pageRepository)
    {
    }
    public function create(array $data) {
        return $this->pageRepository->create($data);
    }
    public function update($id, array $data) {
        return $this->pageRepository->update($id, $data);
    }
    public function delete($id) {
        if ($this->getById($id)) {
            return $this->pageRepository->delete($id);
        }
        return false;
    }
    public function getAll() {
        return $this->pageRepository->getAll();
    }
    public function getById($id) {
        return $this->pageRepository->getById($id);
    }
}
