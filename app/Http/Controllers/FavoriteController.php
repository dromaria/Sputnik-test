<?php

namespace App\Http\Controllers;

use App\Actions\Favorite\IndexFavoriteAction;
use App\Actions\Favorite\IndexByIdFavoriteAction;
use App\Actions\Favorite\StoreFavoriteAction;
use App\Actions\Favorite\StoreByIdFavoriteAction;
use App\DTO\Favorite\FavoriteDTO;
use App\Http\Requests\Favorite\StoreFavoritePlaceRequest;
use App\Http\Requests\Favorite\StoreFavoriteRequest;
use App\Http\Resources\FavoriteResource;
use App\Http\Resources\UserFavoriteResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FavoriteController extends Controller
{
    public function indexById(int $userId, IndexByIdFavoriteAction $action): UserFavoriteResource
    {
        $user = $action->execute($userId);

        return new UserFavoriteResource($user);
    }

    public function index(IndexFavoriteAction $action): ResourceCollection
    {
        $users = $action->execute();

        return UserFavoriteResource::collection($users);
    }

    public function storeById(StoreFavoriteRequest $request, int $userId, StoreByIdFavoriteAction $action): FavoriteResource
    {
        $dto = new FavoriteDTO([
            'user_id' => $userId,
            'place_id' => $request->getPlaceId(),
        ]);

        $favorite = $action->execute($dto);

        return new FavoriteResource($favorite);
    }

    public function store(StoreFavoritePlaceRequest $request, StoreFavoriteAction $action): FavoriteResource
    {
        $dto = new FavoriteDTO([
            'place_id' => $request->getPlaceId(),
        ]);

        $favorite = $action->execute($dto);

        return new FavoriteResource($favorite);
    }
}
