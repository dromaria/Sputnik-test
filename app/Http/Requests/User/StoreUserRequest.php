<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Authorize\AuthorizeRequest;
use Illuminate\Validation\Rules;

class StoreUserRequest extends AuthorizeRequest
{
    public function rules(): array
    {
        return [
            'login' => ['required', 'string', 'max:255', 'unique:users,login'],
            'password' => ['required', 'confirmed', 'max:72', Rules\Password::defaults()],
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
