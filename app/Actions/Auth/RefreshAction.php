<?php

namespace App\Actions\Auth;


use App\Repositories\Interfaces\AuthRepositoryInterface;

class RefreshAction
{
    public function __construct(private AuthRepositoryInterface $repository)
    {
    }
    public function execute(): string
    {
        return $this->repository->refresh();
    }
}
