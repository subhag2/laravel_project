<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    function userLogin(Request $rq){
        return $rq->input();
    }
}
