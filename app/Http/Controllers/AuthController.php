<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        if (!$token = auth()->attempt(["username" => $request->username, "password" => $request->password]))
        {
            return response()->json([
                "message" => "Unauthorized"
            ], 401);
        }
        return response()->json([
            "message" => "Logged in successfully",
            "access_token" => $token
        ]);
    }
}
