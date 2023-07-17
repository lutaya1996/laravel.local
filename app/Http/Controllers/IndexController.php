<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function show()
    {
        return view('index', ['title' => 'PetLover - Главная страница']);
    }

}
