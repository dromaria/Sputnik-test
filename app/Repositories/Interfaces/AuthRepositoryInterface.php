<?php

namespace App\Repositories\Interfaces;

use App\DTO\User\UserDTO;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

interface AuthRepositoryInterface
{
    public function register(UserDTO $dto): Model|User;

    public function login();
}
