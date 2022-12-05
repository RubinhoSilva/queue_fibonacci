<?php

namespace App\Http\Services\Auth;

class LoginService
{

    public function login(array $data)
    {
        if (auth()->attempt($data)) {
            return [auth()->user(), auth()->user()->createToken('api')->plainTextToken];
        }

        return [null, null];
    }

}
