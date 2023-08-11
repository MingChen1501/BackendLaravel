<?php

namespace App\Repositories\impl;

use App\Models\Audio;
use App\Repositories\AudioRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class AudioRepositoryImpl implements AudioRepositoryInterface
{
    public function getAll(): Collection
    {
        return Audio::all();
    }

    public function getById($id)
    {
        return Audio::find($id);
    }

    public function create(array $attributes)
    {
        // TODO: Implement create() method.
    }

    public function update($id, array $attributes)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function getByIdWithTexts($id)
    {
        // TODO: Implement getByIdWithTexts() method.
    }

    public function getAllWithTexts()
    {
        // TODO: Implement getAllWithTexts() method.
    }

    public function getAllWithTextAndPage()
    {
        // TODO: Implement getAllWithTextAndPage() method.
    }

    public function getByIdWithTextAndPage($id)
    {
        // TODO: Implement getByIdWithTextAndPage() method.
    }
}
