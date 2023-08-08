<?php

namespace App\Repository;

interface StoryRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
    public function getWithEmbeds($id, $embeds);
}
