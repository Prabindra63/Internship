@extends('layouts.admin') @section('title', 'Message Details') @section('header', 'Message Details')
@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 max-w-3xl">
    <div class="grid grid-cols-2 gap-4 mb-6">
        <div><label class="text-xs text-gray-500 uppercase font-semibold">Name</label><p class="mt-1">{{ $contactMessage->name }}</p></div>
        <div><label class="text-xs text-gray-500 uppercase font-semibold">Email</label><p class="mt-1"><a href="mailto:{{ $contactMessage->email }}" class="text-blue-600">{{ $contactMessage->email }}</a></p></div>
        <div><label class="text-xs text-gray-500 uppercase font-semibold">Phone</label><p class="mt-1">{{ $contactMessage->phone ?? '-' }}</p></div>
        <div><label class="text-xs text-gray-500 uppercase font-semibold">Status</label><p class="mt-1"><span class="px-2 py-1 text-xs rounded-full @if($contactMessage->status === 'unread') bg-yellow-100 text-yellow-700 @elseif($contactMessage->status === 'read') bg-blue-100 text-blue-700 @else bg-green-100 text-green-700 @endif">{{ ucfirst($contactMessage->status) }}</span></p></div>
        <div><label class="text-xs text-gray-500 uppercase font-semibold">Subject</label><p class="mt-1">{{ $contactMessage->subject }}</p></div>
        <div><label class="text-xs text-gray-500 uppercase font-semibold">Date</label><p class="mt-1">{{ $contactMessage->created_at->format('M d, Y H:i') }}</p></div>
    </div>
    <div class="mb-6">
        <label class="text-xs text-gray-500 uppercase font-semibold">Message</label>
        <p class="mt-2 text-gray-700 leading-relaxed">{{ $contactMessage->message }}</p>
    </div>
    <div class="flex gap-3">
        @if ($contactMessage->status !== 'replied')
            <form action="{{ route('admin.contact-messages.mark-replied', $contactMessage) }}" method="POST">
                @csrf
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 text-sm">Mark as Replied</button>
            </form>
        @endif
        <form action="{{ route('admin.contact-messages.destroy', $contactMessage) }}" method="POST" onsubmit="return confirm('Are you sure?')">
            @csrf @method('DELETE')
            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 text-sm">Delete</button>
        </form>
        <a href="{{ route('admin.contact-messages.index') }}" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 text-sm">Back</a>
    </div>
</div>
@endsection
