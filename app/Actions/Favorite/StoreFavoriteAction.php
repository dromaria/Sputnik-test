<?php

namespace App\Actions\Favorite;

use App\Actions\Auth\MeAction;
use App\DTO\Favorite\FavoriteDTO;
use App\Models\Favorite;
use App\Repositories\Interfaces\FavoriteRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class StoreFavoriteAction
{
    public function __construct(private FavoriteRepositoryInterface $repository, private MeAction $action)
    {
    }

    public function execute(FavoriteDTO $dto): Model|Favorite
    {
        $user = $this->action->execute();
        $dto->user_id = $user->id;

        return $this->repository->store($dto);
    }
}
