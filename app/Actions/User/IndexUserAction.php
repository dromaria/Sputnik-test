<?php

namespace App\Actions\User;

use App\DTO\Pagination\PaginationDTO;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Collection;

class IndexUserAction
{
    public function __construct(private UserRepositoryInterface $repository)
    {
    }

    public function execute(PaginationDTO $dto): Collection
    {
        return $this->repository->index($dto);
    }
}
