<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController
{
    public function index(Request $request)
    {
        return view('register.index', ['title'=>'Регистрация', 'request'=>$request]);
    }
}
