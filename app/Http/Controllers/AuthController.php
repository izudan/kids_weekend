<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
use JWTFactory;
use JWTAuth;
use App\User;
use Response;


class AuthController extends Controller
{
    public function register(RegisterFormRequest $request)
    {
        $validator = Validator::make($request->all(), [
            // 'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password'=> 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        
        $user = User::create([
            // 'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);
        
        $token = JWTAuth::fromUser($user);
        return response()->json(compact('user', 'token'), 201);
    }

    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        $user = User::where('email', $request->email)->first();

        // all good so return the token
        return response()->json(compact('user', 'token'));
    }

    public function getCurrentUser()
    {
        $user = JWTAuth::parseToken()->authenticate();
        return response()->json(compact('user'));
    }
    
    public function logout()
    {
    }
}