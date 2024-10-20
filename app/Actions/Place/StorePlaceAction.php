<?php

namespace App\Actions\Place;

use App\DTO\Place\PlaceDTO;
use App\Models\Place;
use App\Repositories\Interfaces\PlaceRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class StorePlaceAction
{
    public function __construct(private PlaceRepositoryInterface $repository)
    {
    }

    public function execute(PlaceDTO $dto): Model|Place
    {
        return $this->repository->store($dto);
    }
}
