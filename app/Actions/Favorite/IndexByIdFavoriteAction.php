<?php

namespace App\Actions\Favorite;

use App\Models\User;
use App\Repositories\Interfaces\FavoriteRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class IndexByIdFavoriteAction
{
    public function __construct(private FavoriteRepositoryInterface $repository)
    {
    }

    public function execute(int $userId): Model|User
    {
        return $this->repository->index($userId);
    }
}
