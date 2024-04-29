<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index( $request){
        return view('about',['name'=>$request]);
    }
    public function subha($id)
    {
        return "gsgshsgfksfd   ".$id;
    }
}