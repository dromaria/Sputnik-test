<?php

namespace App\Actions\Favorite;

use App\DTO\Favorite\FavoriteDTO;
use App\Models\Favorite;
use App\Repositories\Interfaces\FavoriteRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class StoreByIdFavoriteAction
{
    public function __construct(private FavoriteRepositoryInterface $repository)
    {
    }

    public function execute(FavoriteDTO $dto): Model|Favorite
    {
        return $this->repository->store($dto);
    }
}
