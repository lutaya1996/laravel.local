<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController
{
    public function index(Request $request)
    {
        return view('login.index', ['title'=>'Login', 'request'=>$request]);
    }

    public function store(Request $request)
    {
        $email = $request->input('email');

        $password = $request->input('password');
    }
}
