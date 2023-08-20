<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    public function homepage () {
        $promoCategory=Category::where('name','=','promo')->first();
        $postIds=PostCategory::where('category_id', '=', $promoCategory->id)->get()->pluck('post_id');
        $posts = Post::whereIn('id',$postIds)->get();
        return view('public_pages.homepage', ['posts' => $posts]);
        // return view('public_pages.homepage');
    }
    public function blog () {
        $posts = Post::all();
        return view('public_pages.blog', ['posts' => $posts]);
    }

    public function location () {
        $posts = Post::all();
        return view('public_pages.location', ['posts' => $posts]);
    }
    public function pricelist () {
        $posts = Post::all();
        return view('public_pages.pricelist', ['posts' => $posts]);
    }
    public function show ($slug) {
        $post = Post::where('slug', $slug)->first();
        $categories = Category::whereIn('id', $post->categories->pluck('category_id'))->get();
        return view('public_pages.show', ['post' => $post, 'categories' => $categories]);
    }
    
}
