<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login() {
        return view('login');
    }

    public function register(){ 
        return view('registration');
    }
    public function adduser(Request  $request){  
        $validate = $request->validate([
            'name'             => ['required'],
            'password'         => ['required'],
            'confirm_password' => ['required'],
            'email'            => ['required','unique:users']
        ]);
    }
}
