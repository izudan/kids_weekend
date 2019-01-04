<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
use JWTAuth;
use App\User;

class AuthController extends Controller
{
    public function register(RegisterFormRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);

        // $user = new User;
        // $user->email = $request->email;
        // $user->name = $request->name;
        // $user->password = bcrypt($request->password);
        // $user->save();
        // return response([
        //     'status' => 'success',
        //     'data' => $user
        // ], 200);
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


    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     if (!$token = JWTAuth::attempt($credentials)) {
    //         return response([
    //             'status' => 'error',
    //             'error' => 'invalid.credentials',
    //             'msg' => 'Invalid Credentials.'
    //         ], 400);
    //     }
    //     return response([
    //         'status' => 'success',
    //         'token' => $token
    //     ]);
    // }
    // public function user(Request $request)
    // {
    //     $user = User::find(Auth::user()->id);
    //     return response([
    //         'status' => 'success',
    //         'data' => $user
    //     ]);
    // }
    // /**
    //  * Log out
    //  * Invalidate the token, so user cannot use it anymore
    //  * They have to relogin to get a new token
    //  *
    //  * @param Request $request
    //  */
    
    // public function logout(Request $request) {
    //     $this->validate($request, ['token' => 'required']);
    //     try {
    //         JWTAuth::invalidate($request->input('token'));
    //         return response([
    //             'status' => 'success',
    //             'msg' => 'You have successfully logged out.'
    //         ]);
    //     } catch (JWTException $e) {
    //         // something went wrong whilst attempting to encode the token
    //         return response([
    //             'status' => 'error',
    //             'msg' => 'Failed to logout, please try again.'
    //         ]);
    //     }
    // }
    // public function refresh()
    // {
    //     return response([
    //         'status' => 'success'
    //     ]);
    // }
}

// namespace App\Http\Controllers;
 
// class AuthController extends Controller
// {
//     function login() {
//         $credentials = request(['email', 'password']);
 
//         if (!$token = auth('api')->attempt($credentials)) {
//             return response()->json(['error' => 'Unauthorized'], 401);
//         }
 
//         return $this->respondWithToken($token);
//     }
 
//     public function logout()
//     {
//         auth()->logout();
//         return response()->json(['message' => 'ログアウトしました。']);
//     }
 
//     public function me()
//     {
//         return response()->json(auth()->user());
//     }
 
//     protected function respondWithToken($token)
//     {
//         return response()->json([
//             'access_token' => $token,
//             'token_type' => 'bearer',
//             'expires_in' => auth("api")->factory()->getTTL() * 60
//         ]);
//     }
// }

