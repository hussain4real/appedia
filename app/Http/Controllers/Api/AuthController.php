<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;

/**
 * @group User management
 *
 * APIs for managing users
 */
class AuthController extends Controller
{

    public $successStatus = 200;
    /**
	 * Create a user
	 *
     * @bodyParam name string required fullname of the registrant. Example: Hussain Aminu
     *
     * @bodyParam email string required email of the registrant. Example: aminu1@gmail.com
     *
     * @bodyParam password string required password of the registrant. Example: 1234aminu
     *
     * @bodyParam password_confirmation string required confirmed password of the registrant. Example: 1234aminu
     *
     * @responseFile responses/users_registration/users.register.json
     *
     * @responseFile 401 responses/users_registration/401.json
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
    public function register(Request $request)
     {
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


     /**
     * Give a registered user access.
     *
     * @authenticated
     *
     * @responseFile responses/user.login.json
     *
     * @responseFile 401 responses/401.json
     *
     * @bodyParam email string required email of the registrant. Example: aminu@gmail.com
     *
     * @bodyParam password string required password of the registrant. Example: 234aminu
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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



      /**
     * Get a logged in user details.
     *
     * @authenticated
     *
     * @responseFile responses/getUser/user.get.json
     *
     * @responseFile 401 responses/getUser/401.json
     */
    public function getUser()
    {
        $user = Auth::user();
        return response()->json(['message' => 'You are verified', 'success' => $user], $this->successStatus);
    }

}
