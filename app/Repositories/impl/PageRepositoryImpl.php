<?php

namespace App\Repositories\impl;

use App\Models\Page;
use App\Repositories\PageRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PageRepositoryImpl implements PageRepositoryInterface
{

    public function getAll(): Collection
    {
        return Page::all();
    }
    public function getById($id) : ?Page
    {
        return Page::find($id);
    }
    public function create(array $attributes)
    {
        return Page::create($attributes);
    }
    public function update($id, array $attributes)
    {
        return Page::find($id)->update($attributes);
    }
    public function delete($id)
    {
        return Page::find($id)->delete();
    }

    public function getAllWithTexts(): Collection
    {
        return Page::with('textConfigs.text')->get();
    }

    public function getByIdWithTexts($id): Model|Collection|\Illuminate\Database\Eloquent\Builder|array|null
    {
        return Page::with('textConfigs.text')->find($id);
    }
}
