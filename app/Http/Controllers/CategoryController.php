<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index () {
        return 'categories index';
    }

    public function create () {
        return 'categories create';
    }

    public function edit ($id) {
        return 'categories edit id = ' . $id;
    }

    public function destroy ($id) {
        return 'categories destroy id = ' . $id;
    }
}
