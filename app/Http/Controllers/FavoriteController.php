<?php

namespace App\Http\Controllers;

use App\Actions\Favorite\IndexFavoriteAction;
use App\Actions\Favorite\StoreFavoriteAction;
use App\DTO\Favorite\FavoriteDTO;
use App\Http\Requests\Favorite\StoreFavoriteRequest;
use App\Http\Resources\FavoriteResource;
use App\Http\Resources\UserFavoriteResource;

class FavoriteController extends Controller
{
    public function index(int $userId, IndexFavoriteAction $action): UserFavoriteResource
    {
        $user = $action->execute($userId);

        return new UserFavoriteResource($user);
    }

    public function store(StoreFavoriteRequest $request, int $userId, StoreFavoriteAction $action): FavoriteResource
    {
        $dto = new FavoriteDTO([
            'user_id' => $userId,
            'place_id' => $request->getPlaceId(),
        ]);

        $favorite = $action->execute($dto);

        return new FavoriteResource($favorite);
    }
}
