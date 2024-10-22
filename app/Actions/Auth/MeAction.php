<?php

namespace App\Actions\Auth;

use App\Models\User;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use Illuminate\Contracts\Auth\Authenticatable;

class MeAction
{
    public function __construct(private AuthRepositoryInterface $repository)
    {
    }

    public function execute(): User|Authenticatable|null
    {
        return $this->repository->me();
    }
}
