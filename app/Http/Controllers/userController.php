<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function show()
    {
        $name=['subha','susumay','shyam'];
        return view('hello',['users'=>$name]);
    }
}
