<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('posts.show', compact('post'));
    }

    public function getAllInAjax(Request $request)
    {
        $posts = Post::all();

        return response()->json([
            'posts' => $posts
        ]);
    }

}
