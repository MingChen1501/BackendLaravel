<?php

namespace App\Services;

use App\Repositories\PageRepositoryInterface;

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

    public function getAllWithTexts(array $queryParams)
    {
        //TODO: dùng middleware để validate query params
        foreach ($queryParams as $key => $value) {
            if ($key === 'embed' && $value === 'texts') {
                return $this->pageRepository->getAllWithTexts();
            }
        }
        return $this->pageRepository->getAll();
    }

    public function getByIdWithParams($id, array|string $queryParams)
    {
        foreach ($queryParams as $key => $value) {
            if ($key === 'embed' && $value === 'texts') {
                return $this->pageRepository->getByIdWithTexts($id);
            }
        }
        return $this->getById($id);
    }
}
