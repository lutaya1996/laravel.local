<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController
{
    public function index(Request $request)
    {
        return view('register.index', ['title' => 'Регистрация', 'request' => $request]);
    }

    public function store(Request $request)
    {

        $validated = validate($request->all(), [

            'name' => ['required', 'string', 'max:50'],

            'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],

            'password' => ['required', 'string', 'min:5', 'max:50', 'confirmed'],

        ]);

        $user = User::query()->create([

            'name' => $validated['name'],

            'email' => $validated['email'],

            'password' => bcrypt($validated['password']),

    ]);

        $user->save();

        return redirect()->route('blog.index');
    }

}
