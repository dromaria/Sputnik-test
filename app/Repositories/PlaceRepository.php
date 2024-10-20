<?php

namespace App\Repositories;

use App\DTO\Pagination\PaginationDTO;
use App\DTO\Place\PlaceDTO;
use App\Models\Place;
use App\Repositories\Interfaces\PlaceRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PlaceRepository implements PlaceRepositoryInterface
{
    public function index(PaginationDTO $dto): Collection
    {
        $offset = ($dto->page - 1) * $dto->limit;
        return Place::offset($offset)->limit($dto->limit)->get();
    }

    public function store(PlaceDTO $dto): Model|Place
    {
        return Place::create($dto->toArray());
    }
}
