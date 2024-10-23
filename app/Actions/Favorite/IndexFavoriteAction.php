<?php

namespace App\Actions\Favorite;

use App\Actions\Auth\MeAction;
use App\Repositories\Interfaces\FavoriteRepositoryInterface;
use Illuminate\Support\Collection;

class IndexFavoriteAction
{
    public function __construct(private FavoriteRepositoryInterface $repository, private MeAction $action)
    {
    }

    public function execute(): Collection
    {
        $user = $this->action->execute();

        if ($user->role->role == 'admin')
        {
            return $this->repository->indexAll();
        }
        return collect([$this->repository->index($user->id)]);
    }
}
