<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;
use Illuminate\Validation\Rules;

class LoginUserRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'login' => ['required', 'string', 'min:6', 'max:255'],
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
