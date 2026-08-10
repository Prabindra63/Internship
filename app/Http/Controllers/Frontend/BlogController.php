<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::published()->with(['category', 'author'])->latest()->paginate(9);
        $categories = BlogCategory::all();

        return view('frontend.blog.index', compact('posts', 'categories'));
    }

    public function show(string $slug)
    {
        $post = BlogPost::published()->with(['category', 'author'])
            ->where('slug', $slug)->firstOrFail();

        $relatedPosts = BlogPost::published()
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->take(3)->get();

        return view('frontend.blog.show', compact('post', 'relatedPosts'));
    }
}
