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

        $validated = validate($request->all(), [

            'email' => ['required', 'string', 'email'],

            'password' => ['required', 'string', 'min:5'],

        ]);


        $email = $request->input('email');

        $password = $request->input('password');

        alert("Добро пожаловать");

       return redirect()->route('admin.articles');

    }
}
