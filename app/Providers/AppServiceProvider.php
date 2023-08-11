<?php

namespace App\Providers;

use App\Repositories\AudioRepositoryInterface;
use App\Repositories\impl\AudioRepositoryImpl;
use App\Repositories\impl\PageRepositoryImpl;
use App\Repositories\impl\StoryRepositoryImpl;
use App\Repositories\impl\TextRepositoryImpl;
use App\Repositories\PageRepositoryInterface;
use App\Repositories\StoryRepositoryInterface;
use App\Repositories\TextRepositoryInterface;
use App\Services\AudioService;
use App\Services\PageService;
use App\Services\StoryService;
use App\Services\TextService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            PageRepositoryInterface::class,
            PageRepositoryImpl::class
        );
        $this->app->bind(
            PageService::class,
            function ($app) {
                return new PageService($app->make(PageRepositoryInterface::class));
            }
        );

        $this->app->bind(
            StoryRepositoryInterface::class,
            StoryRepositoryImpl::class
        );
        $this->app->bind(
            StoryService::class,
            function ($app) {
                return new StoryService($app->make(StoryRepositoryInterface::class));
            }
        );

        $this->app->bind(
            AudioRepositoryInterface::class,
            AudioRepositoryImpl::class
        );
        $this->app->bind(
            AudioService::class,
            function ($app) {
                return new AudioService($app->make(AudioRepositoryInterface::class));
            }
        );

        $this->app->bind(
            TextRepositoryInterface::class,
            TextRepositoryImpl::class
        );
        $this->app->bind(
            TextService::class,
            function ($app) {
                return new TextService($app->make(TextRepositoryInterface::class));
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
