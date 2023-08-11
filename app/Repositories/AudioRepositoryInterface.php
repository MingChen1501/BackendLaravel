<?php

namespace App\Repositories;

interface AudioRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
    public function getByIdWithTexts($id);
    public function getAllWithTexts();
    public function getAllWithTextAndPage();
    public function getByIdWithTextAndPage($id);

}
