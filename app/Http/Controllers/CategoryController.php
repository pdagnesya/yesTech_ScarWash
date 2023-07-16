<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index () {
        $categories = Category::all();
        return view('category.index', ['categories' => $categories]);
    }

    public function create () {
        return view('category.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    public function edit ($id) {
        return 'categories edit id = ' . $id;
    }

    public function destroy ($id) {
        return 'categories destroy id = ' . $id;
    }
}
