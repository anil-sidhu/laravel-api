<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class Basic extends Controller
{
    //

    function index()
    {
        return User::all();
    }

    function insert(Request $request)
    {
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;

        if($user->save())
        {
            return ['status'=>"data has been inserted"];
        }

    }
 
}
