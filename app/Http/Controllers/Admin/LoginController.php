<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Monolog\Handler\RedisHandler;

class LoginController extends Controller
{
    public function login(){

        return view('Admin.login');

    }
    public function dologin(){
        $input =request()->only('username','password');
        if(auth()->guard('admin')->attempt($input)){
            return  redirect()->route('admin.dashboard');
        }
        else{
            return "login Error";
        }
    }
}
