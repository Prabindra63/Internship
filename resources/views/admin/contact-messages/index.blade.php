@extends('layouts.admin') @section('title', 'Contact Messages') @section('header', 'Contact Messages')
@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr><th class="text-left px-4 py-3 font-medium">Name</th><th class="text-left px-4 py-3 font-medium">Email</th><th class="text-left px-4 py-3 font-medium">Subject</th><th class="text-left px-4 py-3 font-medium">Status</th><th class="text-left px-4 py-3 font-medium">Date</th><th class="text-right px-4 py-3 font-medium">Actions</th></tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($messages as $message)
                <tr class="hover:bg-gray-50 {{ $message->status === 'unread' ? 'font-semibold' : '' }}">
                    <td class="px-4 py-3">{{ $message->name }}</td>
                    <td class="px-4 py-3 text-gray-500">{{ $message->email }}</td>
                    <td class="px-4 py-3">{{ $message->subject }}</td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs rounded-full 
                            @if($message->status === 'unread') bg-yellow-100 text-yellow-700
                            @elseif($message->status === 'read') bg-blue-100 text-blue-700
                            @else bg-green-100 text-green-700 @endif">
                            {{ ucfirst($message->status) }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-gray-500 text-xs">{{ $message->created_at->format('M d, Y H:i') }}</td>
                    <td class="px-4 py-3 text-right">
                        <a href="{{ route('admin.contact-messages.show', $message) }}" class="text-blue-600 hover:text-blue-800 mr-3">View</a>
                        <form action="{{ route('admin.contact-messages.destroy', $message) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?')">@csrf @method('DELETE')<button type="submit" class="text-red-600 hover:text-red-800">Delete</button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="px-4 py-8 text-center text-gray-500">No messages found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if ($messages->hasPages())<div class="px-4 py-3 border-t border-gray-100">{{ $messages->links() }}</div>@endif
</div>
@endsection
