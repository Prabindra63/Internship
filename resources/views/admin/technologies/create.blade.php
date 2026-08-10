@extends('layouts.admin') @section('title', 'Create Technology') @section('header', 'Create Technology')
@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 max-w-3xl">
    <form method="POST" action="{{ route('admin.technologies.store') }}" enctype="multipart/form-data" class="space-y-5">@csrf
        <div class="grid grid-cols-2 gap-4"><div><label class="block text-sm font-medium text-gray-700 mb-1">Name *</label><input type="text" name="name" value="{{ old('name') }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div><div><label class="block text-sm font-medium text-gray-700 mb-1">Category</label><input type="text" name="category" value="{{ old('category') }}" placeholder="e.g., Backend, Frontend" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Slug</label><input type="text" name="slug" value="{{ old('slug') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div>
        <div class="grid grid-cols-2 gap-4"><div><label class="block text-sm font-medium text-gray-700 mb-1">Icon Class</label><input type="text" name="icon" value="{{ old('icon') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div><div><label class="block text-sm font-medium text-gray-700 mb-1">Logo</label><input type="file" name="logo" accept="image/*" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Description</label><textarea name="description" rows="3" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">{{ old('description') }}</textarea></div>
        <div class="grid grid-cols-2 gap-4"><div><label class="block text-sm font-medium text-gray-700 mb-1">Sort Order</label><input type="number" name="sort_order" value="{{ old('sort_order', 0) }}" min="0" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div><div><label class="flex items-center gap-2 mt-6"><input type="checkbox" name="status" value="1" checked class="rounded border-gray-300 text-blue-600"><span class="text-sm text-gray-700">Active</span></label></div></div>
        <div class="flex gap-3"><button type="submit" class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">Create</button><a href="{{ route('admin.technologies.index') }}" class="px-6 py-2.5 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 text-sm">Cancel</a></div>
    </form>
</div>
@endsection
