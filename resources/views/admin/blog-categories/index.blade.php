@extends('layouts.admin') @section('title', 'Blog Categories') @section('header', 'Blog Categories')
@section('content')
<div class="mb-4 flex justify-end">
    <a href="{{ route('admin.blog-categories.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">+ Add Category</a>
</div>
<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr><th class="text-left px-4 py-3 font-medium">Name</th><th class="text-left px-4 py-3 font-medium">Slug</th><th class="text-right px-4 py-3 font-medium">Actions</th></tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($categories as $category)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $category->name }}</td>
                    <td class="px-4 py-3 text-gray-500">{{ $category->slug }}</td>
                    <td class="px-4 py-3 text-right">
                        <a href="{{ route('admin.blog-categories.edit', $category) }}" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                        <form action="{{ route('admin.blog-categories.destroy', $category) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">@csrf @method('DELETE')<button type="submit" class="text-red-600 hover:text-red-800">Delete</button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="3" class="px-4 py-8 text-center text-gray-500">No categories found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if ($categories->hasPages())<div class="px-4 py-3 border-t border-gray-100">{{ $categories->links() }}</div>@endif
</div>
@endsection
