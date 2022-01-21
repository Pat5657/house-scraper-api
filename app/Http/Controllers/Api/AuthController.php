<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{
    /**
     * Register a new user.
     */
    public function register(Request $request) {
        // validate params
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        // send error if validation failed
        if ($validate->fails()) {
            return $this->sendError('Validation failed', $validate->errors());
        }
        
        // create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        // return user model
        return $this->sendResponse($user);
    }

    /**
     * Login a user and return an auth token
     */
    public function login(Request $request) {
        // attempt to sign in
        if ($request->isMethod('post') && Auth::attempt($request->all())) {
            // get user
            $user = Auth::user();
            // define response
            $response = [
                'user' => $user,
                'token' => $request->user()->createToken('token')->plainTextToken
            ];
            // return response
            return $this->sendResponse($response);
        }

        // if login failed, send error
        return $this->sendError('Failed authentication', [], 401);
    }
}
