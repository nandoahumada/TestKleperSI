<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Passport\Bridge\AccessToken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class LoginController extends Controller
{
    public function login(Request $request){

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $credentials = $request -> only ('email', 'password');

        if( !Auth::attempt($credentials)){
            return response([
                "message" => "Usuario y/o contraseña no son correctos, favor de validar con administrador"], 401);
        }

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');

         $token = $tokenResult->token;
         if ($request->remember_me)
             $token->expires_at = Carbon::now()->addWeeks(1);
         $token->save();

        $accessToken = Auth::user() -> createToken('authTestToken')->accessToken;

        return response()->json([

            "user" => Auth::user(),
            "access_token" => $accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString()

        ]);

        
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Obtener el objeto User como json
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
