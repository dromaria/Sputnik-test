<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;
use Illuminate\Validation\Rules;

class RegisterUserRequest extends BaseRequest
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
