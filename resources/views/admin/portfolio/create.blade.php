@extends('layouts.admin') @section('title', 'Create Project') @section('header', 'Create Project')
@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 max-w-3xl">
    <form method="POST" action="{{ route('admin.portfolio.store') }}" enctype="multipart/form-data" class="space-y-5">
        @csrf
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Title *</label><input type="text" name="title" value="{{ old('title') }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">@error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror</div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Slug</label><input type="text" name="slug" value="{{ old('slug') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">@error('slug')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror</div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Short Description</label><textarea name="short_description" rows="3" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">{{ old('short_description') }}</textarea></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Full Description</label><textarea name="description" rows="8" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">{{ old('description') }}</textarea></div>
        <div class="grid grid-cols-2 gap-4">
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Client Name</label><input type="text" name="client_name" value="{{ old('client_name') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Project URL</label><input type="url" name="project_url" value="{{ old('project_url') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div>
        </div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Featured Image</label><input type="file" name="featured_image" accept="image/*" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">@error('featured_image')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror</div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Technologies Used (comma separated)</label><input type="text" name="technologies_used" value="{{ old('technologies_used') }}" placeholder="e.g., Laravel, Vue, PostgreSQL" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div>
        <div class="grid grid-cols-2 gap-4">
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Completion Date</label><input type="date" name="completion_date" value="{{ old('completion_date') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div>
            <div class="flex items-center gap-4 mt-6">
                <label class="flex items-center gap-2"><input type="checkbox" name="status" value="1" checked class="rounded border-gray-300 text-blue-600"><span class="text-sm text-gray-700">Active</span></label>
                <label class="flex items-center gap-2"><input type="checkbox" name="featured" value="1" class="rounded border-gray-300 text-yellow-500"><span class="text-sm text-gray-700">Featured</span></label>
            </div>
        </div>
        <div class="flex gap-3"><button type="submit" class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">Create</button><a href="{{ route('admin.portfolio.index') }}" class="px-6 py-2.5 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 text-sm">Cancel</a></div>
    </form>
</div>
@endsection
