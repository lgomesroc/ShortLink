<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\PasswordValidationService;
use App\Services\PasswordUpdateService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $passwordValidationService;
    protected $passwordUpdateService;

    public function __construct(PasswordValidationService $passwordValidationService, PasswordUpdateService $passwordUpdateService)
    {
        $this->passwordValidationService = $passwordValidationService;
        $this->passwordUpdateService = $passwordUpdateService;
    }

    public function updatePassword(Request $request)
    {
        $validator = $this->passwordValidationService->validatePassword($request->all());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $user = User::where('username', $request->username)->first();

        $response = $this->passwordUpdateService->updateUserPassword($user, $request->new_password);

        if (isset($response['error'])) {
            return response()->json(['error' => $response['error']], 400);
        }

        return response()->json(['success' => $response['success']], 200);
    }
}
