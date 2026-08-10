@extends('layouts.admin') @section('title', 'Pages') @section('header', 'Pages')
@section('content')
<div class="mb-4 flex justify-end">
    <a href="{{ route('admin.pages.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">+ Add Page</a>
</div>
<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr><th class="text-left px-4 py-3 font-medium">Title</th><th class="text-left px-4 py-3 font-medium">Slug</th><th class="text-left px-4 py-3 font-medium">Status</th><th class="text-right px-4 py-3 font-medium">Actions</th></tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($pages as $page)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $page->title }}</td>
                    <td class="px-4 py-3 text-gray-500">{{ $page->slug }}</td>
                    <td class="px-4 py-3"><span class="px-2 py-1 text-xs rounded-full {{ $page->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">{{ $page->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="px-4 py-3 text-right">
                        <a href="{{ route('admin.pages.edit', $page) }}" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                        <form action="{{ route('admin.pages.destroy', $page) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">@csrf @method('DELETE')<button type="submit" class="text-red-600 hover:text-red-800">Delete</button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="4" class="px-4 py-8 text-center text-gray-500">No pages found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if ($pages->hasPages())<div class="px-4 py-3 border-t border-gray-100">{{ $pages->links() }}</div>@endif
</div>
@endsection
