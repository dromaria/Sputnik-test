<?php

namespace App\Actions\Auth;

use App\DTO\User\UserDTO;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class LoginAction
{
    public function __construct(private AuthRepositoryInterface $repository)
    {
    }

    public function execute(UserDTO $dto): string|bool
    {
        $token = $this->repository->attempt($dto);

        if (!$token) {
            throw new UnauthorizedHttpException('Bearer', 'Invalid credentials');
        }

        return $token;
    }
}
