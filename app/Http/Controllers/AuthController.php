<?php

namespace App\Http\Controllers;

use App\Actions\Auth\RegisterAction;
use App\DTO\User\UserDTO;
use App\Http\Requests\Auth\RegisterUserRequest;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request, RegisterAction $registerAction): Response
    {
        $dto = new UserDTO([
            'login' => $request->getLogin(),
            'password' => $request->getPassword(),
        ]);

        $registerAction->execute($dto);

        return response()->noContent();
    }
}
