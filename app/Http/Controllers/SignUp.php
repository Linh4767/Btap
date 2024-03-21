<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUp extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function signup(){
        return view("signup");
    }

    public function process(Request $request){
        return view('welcome', ['data'=>$request]);
    }
}
