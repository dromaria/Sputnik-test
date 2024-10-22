<?php

namespace App\Actions\Auth;

use App\DTO\User\UserDTO;
use App\Repositories\Interfaces\AuthRepositoryInterface;

class RegisterAction
{
    public function __construct(private AuthRepositoryInterface $repository)
    {
    }

    public function execute(UserDTO $dto): void
    {
        $this->repository->register($dto);
    }
}
