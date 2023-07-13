<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $banner_image = null;
        if ($request->file('banner_image')) {
            $file = $request->file('banner_image');
            $filename = date('dmY') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $banner_image = $filename;
        }

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'banner_image' => $banner_image,
            'author_id' => Auth::user()->id,
            'slug' => $this->createSlug($request->title)
        ]);

        return redirect()->route('posts.index');
    }

    public static function createSlug($str, $delimiter = '-')
    {
        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        return $slug;
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $this->createSlug($request->title);
        $post->author_id = Auth::user()->id;

        if ($request->file('banner_image')) {
            $file = $request->file('banner_image');
            $filename = date('dmYhis') . rand(0, 100) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $post->banner_image = $filename;
        }

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Post::destroy($id);

        return redirect()->route('posts.index');
    }
}
