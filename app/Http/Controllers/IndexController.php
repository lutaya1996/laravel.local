<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Slide;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function show(Request $request)
    {

        return view('home.index', ['title' => 'PetLover - Главная страница', ]);
    }

}
