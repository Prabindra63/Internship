<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with(['category', 'author'])->latest()->paginate(10);

        return view('admin.blog-posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = BlogCategory::all();

        return view('admin.blog-posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'nullable|exists:blog_categories,id',
            'title' => 'required|max:255',
            'slug' => 'nullable|max:255|unique:blog_posts,slug',
            'excerpt' => 'nullable',
            'content' => 'nullable',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'status' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $this->uploadImage($request->file('featured_image'), 'blog');
        }

        $data['status'] = $request->boolean('status');
        $data['author_id'] = auth()->id();

        BlogPost::create($data);

        return redirect()->route('admin.blog-posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(BlogPost $blogPost)
    {
        $categories = BlogCategory::all();

        return view('admin.blog-posts.edit', compact('blogPost', 'categories'));
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $data = $request->validate([
            'category_id' => 'nullable|exists:blog_categories,id',
            'title' => 'required|max:255',
            'slug' => 'nullable|max:255|unique:blog_posts,slug,'.$blogPost->id,
            'excerpt' => 'nullable',
            'content' => 'nullable',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'status' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $this->uploadImage($request->file('featured_image'), 'blog', $blogPost->featured_image);
        }

        $data['status'] = $request->boolean('status');

        $blogPost->update($data);

        return redirect()->route('admin.blog-posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(BlogPost $blogPost)
    {
        if ($blogPost->featured_image && file_exists(public_path($blogPost->featured_image))) {
            @unlink(public_path($blogPost->featured_image));
        }
        $blogPost->delete();

        return redirect()->route('admin.blog-posts.index')->with('success', 'Post deleted successfully.');
    }
}
