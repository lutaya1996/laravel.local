<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController
{
    public function form(Request $request)
    {
        if($request->has('email') and $request->has('password'))  {

        }
        return view('login', ['title'=>'Login', 'email'=>$request->input('email'), 'password'=>$request->input('password')]);
    }
}
