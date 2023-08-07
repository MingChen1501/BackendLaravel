<?php

namespace App\Repository\impl;

use App\Models\Page;
use App\Repository\PageRepositoryInterface;

class PageRepositoryImpl implements PageRepositoryInterface
{

    public function getAll(): \Illuminate\Database\Eloquent\Collection
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
}
