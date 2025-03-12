<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLogin(){
        return view('UserViews.login');
    }
    public function getRegister(){
        return view('UserViews.register');
    }
}
