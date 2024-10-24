<?php

namespace App\Repositories;

use App\DTO\Favorite\FavoriteDTO;
use App\Models\Favorite;
use App\Models\User;
use App\Repositories\Interfaces\FavoriteRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\HttpException;

class FavoriteRepository implements FavoriteRepositoryInterface
{

    public function index(int $userId): Model|User
    {
        return User::with('favorites.place')->findOrFail($userId);
    }

    public function indexAll(): Collection|array
    {
        return User::with('favorites.place')->get();
    }

    public function store(FavoriteDTO $dto): Model|Favorite
    {
        if (Favorite::where('user_id', $dto->user_id)->where('place_id', $dto->place_id)->exists()){
            throw new HttpException(422, 'The place has already been taken');
        }

        $countFavorites = Favorite::where('user_id', $dto->user_id)->count();

        if ($countFavorites >= 3){
            throw new HttpException(400, 'You cannot add more than 3 places to your favorites');
        }

        return Favorite::create($dto->toArray());
    }
}
