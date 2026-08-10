@extends('layouts.admin') @section('title', 'Create Testimonial') @section('header', 'Create Testimonial')
@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 max-w-3xl">
    <form method="POST" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data" class="space-y-5">@csrf
        <div class="grid grid-cols-2 gap-4"><div><label class="block text-sm font-medium text-gray-700 mb-1">Client Name *</label><input type="text" name="client_name" value="{{ old('client_name') }}" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div><div><label class="block text-sm font-medium text-gray-700 mb-1">Company Name</label><input type="text" name="company_name" value="{{ old('company_name') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Position</label><input type="text" name="client_position" value="{{ old('client_position') }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Message *</label><textarea name="message" rows="5" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">{{ old('message') }}</textarea>@error('message')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror</div>
        <div class="grid grid-cols-2 gap-4"><div><label class="block text-sm font-medium text-gray-700 mb-1">Client Image</label><input type="file" name="client_image" accept="image/*" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg"></div><div><label class="block text-sm font-medium text-gray-700 mb-1">Rating (1-5)</label><select name="rating" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">@for($i=1;$i<=5;$i++)<option value="{{ $i }}" {{ old('rating', 5) == $i ? 'selected' : '' }}>{{ $i }}</option>@endfor</select></div></div>
        <div><label class="flex items-center gap-2"><input type="checkbox" name="status" value="1" checked class="rounded border-gray-300 text-blue-600"><span class="text-sm text-gray-700">Active</span></label></div>
        <div class="flex gap-3"><button type="submit" class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">Create</button><a href="{{ route('admin.testimonials.index') }}" class="px-6 py-2.5 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 text-sm">Cancel</a></div>
    </form>
</div>
@endsection
