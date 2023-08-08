<?php

namespace App\Repository\impl;

use App\Models\Story;
use App\Repository\StoryRepositoryInterface;

class StoryRepositoryImpl implements StoryRepositoryInterface
{
    public function __construct(protected Story $story)
    {
    }
    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->story->all();
    }

    public function getById($id)
    {
        return $this->story->find($id);
    }

    public function create(array $attributes)
    {
        return $this->story->create($attributes);
    }

    public function update($id, array $attributes)
    {
        return $this->story->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->story->find($id)->delete();
    }

    public function getWithEmbeds($id, $embeds)
    {
        return $this->story->with($embeds)->find($id);
    }
}
