<?php

namespace App\Providers;

use App\Repositories\FavoriteRepository;
use App\Repositories\Interfaces\FavoriteRepositoryInterface;
use App\Repositories\Interfaces\PlaceRepositoryInterface;
use App\Repositories\PlaceRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(
            PlaceRepositoryInterface::class,
            PlaceRepository::class
        );
        $this->app->bind(
            FavoriteRepositoryInterface::class,
            FavoriteRepository::class
        );
    }


    public function boot(): void
    {
        //
    }
}
