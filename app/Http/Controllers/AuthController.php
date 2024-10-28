<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Resources\AuthResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(AuthRequest $request) : AuthResource
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();
        
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return abort(401);
        }

        return AuthResource::make($user);
    }    
}
