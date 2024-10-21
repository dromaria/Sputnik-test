<?php

namespace App\Repositories\Interfaces;

use App\DTO\Pagination\PaginationDTO;
use App\DTO\User\UserDTO;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function index(PaginationDTO $dto): Collection;

    public function store(UserDTO $dto): Model|User;
}
