@extends('layouts.admin') @section('title', 'Team Members') @section('header', 'Team Members')
@section('content')
<div class="mb-4 flex justify-end">
    <a href="{{ route('admin.team-members.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">+ Add Member</a>
</div>
<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr><th class="text-left px-4 py-3 font-medium">Name</th><th class="text-left px-4 py-3 font-medium">Position</th><th class="text-left px-4 py-3 font-medium">Status</th><th class="text-right px-4 py-3 font-medium">Actions</th></tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($members as $member)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $member->name }}</td>
                    <td class="px-4 py-3 text-gray-500">{{ $member->position ?? '-' }}</td>
                    <td class="px-4 py-3"><span class="px-2 py-1 text-xs rounded-full {{ $member->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">{{ $member->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="px-4 py-3 text-right">
                        <a href="{{ route('admin.team-members.edit', $member) }}" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                        <form action="{{ route('admin.team-members.destroy', $member) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">@csrf @method('DELETE')<button type="submit" class="text-red-600 hover:text-red-800">Delete</button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="4" class="px-4 py-8 text-center text-gray-500">No team members found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if ($members->hasPages())<div class="px-4 py-3 border-t border-gray-100">{{ $members->links() }}</div>@endif
</div>
@endsection
