<?php

namespace App\Providers;

use App\Repositories\StoryRepositoryInterface;
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
            \App\Repositories\PageRepositoryInterface::class,
            \App\Repositories\impl\PageRepositoryImpl::class
        );
        $this->app->bind(
            PageService::class, function ($app) {
                return new PageService($app->make(\App\Repositories\PageRepositoryInterface::class));
            }
        );
        $this->app->bind(
            \App\Repositories\StoryRepositoryInterface::class,
            \App\Repositories\impl\StoryRepositoryImpl::class
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
