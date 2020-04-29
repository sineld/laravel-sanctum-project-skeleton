<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Throwable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            if (!Auth::attempt(request(['email', 'password']))) {
                return response()->json([
                    'status_code' => 500,
                    'message' => 'Unauthorized (Credentials Incorrect)'
                ]);
            }

            $tokenResult = User::query()
                ->where('email', $request->email)
                ->first()
                ->createToken('authToken')
                ->plainTextToken;

            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ]);
        } catch (Throwable $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Cannot Login',
                'error' => $error->getMessage(),
            ]);
        }
    }
}
