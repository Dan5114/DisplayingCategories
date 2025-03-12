<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Fetch all categories
        return view('categories.index', compact('categories')); // Pass categories to the view
    }
}
