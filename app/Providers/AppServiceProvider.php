<?php

namespace App\Providers;

use App\Repository\StoryRepositoryInterface;
use App\Services\PageService;
use App\Services\StoryService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Repository\PageRepositoryInterface::class,
            \App\Repository\impl\PageRepositoryImpl::class
        );
        $this->app->bind(
            PageService::class, function ($app) {
                return new PageService($app->make(\App\Repository\PageRepositoryInterface::class));
            }
        );
        $this->app->bind(
            \App\Repository\StoryRepositoryInterface::class,
            \App\Repository\impl\StoryRepositoryImpl::class
        );
        $this->app->bind(
            StoryService::class, function ($app) {
                return new StoryService($app->make(StoryRepositoryInterface::class));
            }
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
