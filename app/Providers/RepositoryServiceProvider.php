<?php

namespace App\Providers;

use App\Repositories\FavoriteRepository;
use App\Repositories\Interfaces\FavoriteRepositoryInterface;
use App\Repositories\Interfaces\PlaceRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\PlaceRepository;
use App\Repositories\UserRepository;
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
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }


    public function boot(): void
    {
        //
    }
}
