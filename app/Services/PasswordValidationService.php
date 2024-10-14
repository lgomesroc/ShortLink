<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class PasswordValidationService
{
    public function validatePassword($data)
    {
        return Validator::make($data, [
            'username' => 'required|string|exists:users,username',
            'new_password' => 'required|string|min:8|regex:/^(?=.*[0-9].*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).*$/',
            'confirm_password' => 'required|string|same:new_password',
        ]);
    }
}
