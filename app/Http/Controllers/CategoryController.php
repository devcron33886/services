<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('categories.show', [
            'category' => $category
        ]);
    }
}
