<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    public $successStatus = 200;

 public function register(Request $request) {
    $validator = Validator::make($request->all(),
                [
                'name' => 'required',
                'email' => 'email|required|unique:users',
                'password' => 'required|confirmed',
                // 'c_password' => 'required|same:password',
                ]);
    if ($validator->fails()) {
        return response()->json(['error'=>$validator->errors()], 401);                        }
    $input = $request->all();
    $input['password'] = bcrypt($input['password']);
    $user = User::create($input);
    $success['token'] =  $user->createToken('Housemall')->accessToken;
    return response()->json(['success'=>$success], $this->successStatus);
}

public function login(Request $request)
{
    $loginData = $request->validate([
        'email' => 'email|required',
        'password' => 'required',
    ]);

    if (Auth::attempt($loginData)) {
        $user = Auth::user();
        $success['token'] =  $user->createToken('Housemall')->accessToken;
        return response()->json(['success' => $success, 'user' => auth()->user()], $this->successStatus);
    } else {
        return response()->json(['error'=>'Invalid email or password'], 401);
    }

}

public function getUser()
{
    $user = Auth::user();
    return response()->json(['success' => $user], $this->successStatus);
}

}
