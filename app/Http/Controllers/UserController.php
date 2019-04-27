<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User; 

class UserController extends Controller
{
    //
    public $successStatus = 200;

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
       
        $input = $request->all(); 
                $input['password'] = bcrypt($input['password']); 
                $user = User::create($input); 
 $success['token'] =  $user->createToken('MyApp')->accessToken; 
                $success['name'] =  $user->name;
       return response()->json(['success'=>$success], $this-> successStatus);
    }
}
