<?php

namespace App\Actions\User;

use App\Actions\Auth\MeAction;
use App\DTO\Pagination\PaginationDTO;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Collection;

class IndexUserAction
{
    public function __construct(private UserRepositoryInterface $repository, private MeAction $action)
    {
    }

    public function execute(PaginationDTO $dto): Collection
    {
        $user = $this->action->execute();

        if ($user->role->role == 'admin'){
            return $this->repository->index($dto);
        }

        return $this->repository->indexById($user->id);

    }
}
