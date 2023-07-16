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
        $category = Category::find($id);
        return view('category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        Category::find($id)->update([
            'name' => $request->name,
        ]);
        
        return redirect()->route('categories.index');
    }

    public function destroy ($id) {
        Category::find($id)->delete();
        return redirect()->route('categories.index');
    }
}
