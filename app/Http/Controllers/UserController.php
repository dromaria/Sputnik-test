<?php

namespace App\Http\Controllers;

use App\Actions\User\IndexUserAction;
use App\Actions\User\StoreUserAction;
use App\DTO\Pagination\PaginationDTO;
use App\DTO\User\UserDTO;
use App\Http\Requests\Pagination\PaginationRequest;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserController extends Controller
{
    public function index(PaginationRequest $request, IndexUserAction $action): ResourceCollection
    {
        $dto = new PaginationDTO([
            'limit' => $request->getLimit(),
            'page' => $request->getPage(),
        ]);

        $users = $action->execute($dto);

        return UserResource::collection($users);
    }

    public function store(StoreUserRequest $request, StoreUserAction $action): UserResource
    {
        $dto = new UserDTO([
            'login' => $request->getLogin(),
            'password' => $request->getPassword()
        ]);

        $user = $action->execute($dto);

        return new UserResource($user);
    }
}
