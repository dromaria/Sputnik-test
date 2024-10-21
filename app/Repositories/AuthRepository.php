<?php

namespace App\Repositories;

use App\DTO\User\UserDTO;
use App\Models\User;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterface
{

    public function register(UserDTO $dto): Model|User
    {
        return User::create($dto->toArray());
    }

    public function attempt(UserDTO $dto): bool|string
    {
        return Auth::attempt($dto->toArray());
    }
}
