@extends('layouts.admin') @section('title', 'Edit Category') @section('header', 'Edit Category')
@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 max-w-lg">
    <form method="POST" action="{{ route('admin.blog-categories.update', $blogCategory) }}" class="space-y-5">@csrf @method('PUT')
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Name *</label><input type="text" name="name" value="{{ old('name', $blogCategory->name) }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">@error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror</div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Slug</label><input type="text" name="slug" value="{{ old('slug', $blogCategory->slug) }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Description</label><textarea name="description" rows="3" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">{{ old('description', $blogCategory->description) }}</textarea></div>
        <div class="flex gap-3"><button type="submit" class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">Update</button><a href="{{ route('admin.blog-categories.index') }}" class="px-6 py-2.5 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 text-sm">Cancel</a></div>
    </form>
</div>
@endsection
