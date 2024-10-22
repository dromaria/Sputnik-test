<?php

namespace App\Http\Controllers;

use App\Actions\Auth\AuthHelpers;
use App\Actions\Auth\LoginAction;
use App\Actions\Auth\LogoutAction;
use App\Actions\Auth\MeAction;
use App\Actions\Auth\RefreshAction;
use App\Actions\Auth\RegisterAction;
use App\DTO\User\UserDTO;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request, RegisterAction $action): Response
    {
        $dto = new UserDTO([
            'login' => $request->getLogin(),
            'password' => $request->getPassword(),
        ]);

        $action->execute($dto);

        return response()->noContent();
    }

    public function login(LoginUserRequest $request, LoginAction $action): JsonResponse
    {
        $dto = new UserDTO([
            'login' => $request->getLogin(),
            'password' => $request->getPassword(),
        ]);

        $token = $action->execute($dto);

        return response()->json(AuthHelpers::respondWithToken($token));
    }

    public function me(MeAction $meAction): JsonResponse
    {
        $user = $meAction->execute();

        return response()->json(new UserResource($user));
    }

    public function logout(LogoutAction $logoutAction): Response
    {
        $logoutAction->execute();

        return response()->noContent();
    }

    public function refresh(RefreshAction $refreshAction): JsonResponse
    {
        $token = $refreshAction->execute();

        return response()->json(AuthHelpers::respondWithToken($token));
    }
}
