<?php

namespace App\Services;

use App\Repository\StoryRepositoryInterface;

class StoryService
{
    public function __construct(protected StoryRepositoryInterface $storyRepository)
    {
    }
    public function indexWithEmbeds($id, $embeds)
    {
        return $this->storyRepository->getWithEmbeds($id, $embeds);
    }
}
