<?php

namespace App\Repositories;

use App\DTO\Pagination\PaginationDTO;
use App\DTO\User\UserDTO;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class UserRepository implements UserRepositoryInterface
{

    public function index(PaginationDTO $dto): Collection
    {
        $offset = ($dto->page - 1) * $dto->limit;
        return User::offset($offset)->limit($dto->limit)->get();
    }

    public function store(UserDTO $dto): Model|User
    {
        return User::create($dto->toArray());
    }
}
