<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController
{
    public function index(Request $request)
    {
        return view('register.index', ['title'=>'Регистрация', 'request'=>$request]);
    }

    public function store(Request $request)
    {
        $name = $request->input('name');

        $email = $request->input('email');

        $password = $request->input('password');

        $confirm = $request->input('confirm');

        return $request->all();
    }

}
