<?php

namespace App\Repositories\Interfaces;

use App\DTO\Pagination\PaginationDTO;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function index(PaginationDTO $dto): Collection;

}
