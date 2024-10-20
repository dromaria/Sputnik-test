<?php

namespace App\Providers;

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
    }


    public function boot(): void
    {
        //
    }
}
