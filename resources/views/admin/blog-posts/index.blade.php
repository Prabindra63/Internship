@extends('layouts.admin') @section('title', 'Blog Posts') @section('header', 'Blog Posts')
@section('content')
<div class="mb-4 flex justify-end">
    <a href="{{ route('admin.blog-posts.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">+ Add Post</a>
</div>
<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr><th class="text-left px-4 py-3 font-medium">Title</th><th class="text-left px-4 py-3 font-medium">Category</th><th class="text-left px-4 py-3 font-medium">Author</th><th class="text-left px-4 py-3 font-medium">Status</th><th class="text-right px-4 py-3 font-medium">Actions</th></tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($posts as $post)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $post->title }}</td>
                    <td class="px-4 py-3 text-gray-500">{{ $post->category?->name ?? '-' }}</td>
                    <td class="px-4 py-3 text-gray-500">{{ $post->author?->name ?? '-' }}</td>
                    <td class="px-4 py-3"><span class="px-2 py-1 text-xs rounded-full {{ $post->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">{{ $post->status ? 'Published' : 'Draft' }}</span></td>
                    <td class="px-4 py-3 text-right">
                        <a href="{{ route('admin.blog-posts.edit', $post) }}" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                        <form action="{{ route('admin.blog-posts.destroy', $post) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">@csrf @method('DELETE')<button type="submit" class="text-red-600 hover:text-red-800">Delete</button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="px-4 py-8 text-center text-gray-500">No posts found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if ($posts->hasPages())<div class="px-4 py-3 border-t border-gray-100">{{ $posts->links() }}</div>@endif
</div>
@endsection
