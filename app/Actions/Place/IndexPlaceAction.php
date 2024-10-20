<?php

namespace App\Actions\Place;

use App\DTO\Pagination\PaginationDTO;
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
