<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(): void
    {
        $category = Category::with(['article'])->first();
    }
}
