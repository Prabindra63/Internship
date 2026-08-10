@extends('layouts.admin') @section('title', 'Edit Page') @section('header', 'Edit Page')
@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 max-w-3xl">
    <form method="POST" action="{{ route('admin.pages.update', $page) }}" enctype="multipart/form-data" class="space-y-5">
        @csrf @method('PUT')
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Title *</label><input type="text" name="title" value="{{ old('title', $page->title) }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">@error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror</div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Slug</label><input type="text" name="slug" value="{{ old('slug', $page->slug) }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">@error('slug')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror</div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Content</label><textarea name="content" rows="12" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">{{ old('content', $page->content) }}</textarea></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Featured Image</label>@if($page->featured_image)<div class="mb-2"><img src="{{ asset($page->featured_image) }}" class="h-24 w-auto rounded"></div>@endif<input type="file" name="featured_image" accept="image/*" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">@error('featured_image')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror</div>
        <div><label class="flex items-center gap-2"><input type="checkbox" name="status" value="1" {{ $page->status ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600"><span class="text-sm text-gray-700">Active</span></label></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Meta Title</label><input type="text" name="meta_title" value="{{ old('meta_title', $page->meta_title) }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Meta Description</label><textarea name="meta_description" rows="2" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">{{ old('meta_description', $page->meta_description) }}</textarea></div>
        <div class="flex gap-3"><button type="submit" class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">Update</button><a href="{{ route('admin.pages.index') }}" class="px-6 py-2.5 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 text-sm">Cancel</a></div>
    </form>
</div>
@endsection
