<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Authorize\AuthorizeRequest;
use Illuminate\Validation\Rules;

class LoginUserRequest extends AuthorizeRequest
{
    public function rules(): array
    {
        return [
            'login' => ['required', 'string', 'max:255'],
            'password' => ['required', 'max:72', Rules\Password::defaults()],
        ];
    }

    public function getLogin(): string
    {
        return $this->validated('login');
    }

    public function getPassword(): string
    {
        return $this->validated('password');
    }
}
