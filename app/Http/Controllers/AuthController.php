<?php

namespace App\Http\Controllers;

use App\Actions\Auth\RegisterAction;
use App\DTO\User\UserDTO;
use App\Http\Requests\User\StoreUserRequest;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request, RegisterAction $registerAction): Response
    {
        $data = new UserDTO([
            'login' => $request->getLogin(),
            'password' => $request->getPassword(),
        ]);

        $registerAction->execute($data);

        return response()->noContent();
    }

}
