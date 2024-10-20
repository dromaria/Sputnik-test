<?php

namespace App\Repositories\Interfaces;

use App\DTO\Pagination\PaginationDTO;
use App\DTO\Place\PlaceDTO;
use App\Models\Place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface PlaceRepositoryInterface
{
    public function index(PaginationDTO $dto): Collection;
    public function store(PlaceDTO $dto): Model|Place;
}
