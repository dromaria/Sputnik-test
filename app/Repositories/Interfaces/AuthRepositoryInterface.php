<?php

namespace App\Repositories\Interfaces;

use App\DTO\User\UserDTO;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

interface AuthRepositoryInterface
{
    public function register(UserDTO $dto): Model|User;

    public function attempt(UserDTO $dto): bool|string;

    public function me(): User|Authenticatable|null;

    public function refresh(): string;
}
