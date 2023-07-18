<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show(): void
    {
        $category = Category::with(['article'])->first();
    }
}
