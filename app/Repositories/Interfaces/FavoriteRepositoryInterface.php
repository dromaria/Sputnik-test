<?php

namespace App\Repositories\Interfaces;

use App\DTO\Favorite\FavoriteDTO;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

interface FavoriteRepositoryInterface
{
    public function index(int $userId): Model|User;

    public function store(FavoriteDTO $dto): Model|Favorite;
}
