<?php
namespace App\Http\Controllers;

class RegisterController
{
    public function show()
    {
        return view('register', ['title'=> 'Регистрация']);
    }

    public function register()
    {

    }

}
