<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Institute;
class Institutes extends Controller
{
    //
    public function create(Request $request)
    {
        $item= new Institute;
        $item->name=$request->name;
        $item->location=$request->location;

        $item->save();

        if( $item->save())
        {
            return ['success'=>$item];
        }
        else
        {
            return ['success'=>'operation failed'];
        }




    }
}
