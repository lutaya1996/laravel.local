<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController
{
    public function index(Request $request)
    {
        return view('login.index', ['title'=>'Login']);
    }
}
