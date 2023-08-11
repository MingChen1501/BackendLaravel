<?php

namespace App\Repositories\impl;

use App\Models\Text;
use App\Repositories\TextRepositoryInterface;

class TextRepositoryImpl implements TextRepositoryInterface
{

    public function getAll()
    {
        return Text::all();
    }

    public function getById($id)
    {
        return Text::find($id);
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
}
