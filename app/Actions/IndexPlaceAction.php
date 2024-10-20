<?php

namespace App\Actions;

use App\DTO\Pagination\PaginationDTO;
use App\DTO\Place\PlaceDTO;
use App\Repositories\Interfaces\PlaceRepositoryInterface;
use Illuminate\Support\Collection;

class IndexPlaceAction
{
    public function __construct(private PlaceRepositoryInterface $repository)
    {
    }

    public function execute(PaginationDTO $dto): Collection
    {
        return $this->repository->index($dto);
    }
}
