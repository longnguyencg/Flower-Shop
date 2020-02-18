<?php

namespace App\Providers;

use App\Http\Repositories\Post\PostRepo;
use App\Http\Repositories\Post\PostRepoInterface;
use App\Http\Services\Post\PostService;
use App\Http\Services\Post\PostServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PostServiceInterface::class,PostService::class);
        $this->app->singleton(PostRepoInterface::class,PostRepo::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
