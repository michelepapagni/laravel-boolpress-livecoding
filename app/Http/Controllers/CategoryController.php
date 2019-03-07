<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function getPosts($slug)
    {
        $category = Category::where('slug', $slug)->first();

        if (empty($category)) {
            abort(404);
        }

        $posts = $category->posts;

        return view('categories.posts', compact('posts', 'category'));
    }

}
