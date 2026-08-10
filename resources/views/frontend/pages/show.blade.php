@extends('layouts.app')

@section('meta_title', $page->meta_title ?: $page->title . ' - ' . config('app.name'))
@section('meta_description', $page->meta_description ?: '')

@section('content')
<section class="bg-gradient-to-br from-blue-600 to-indigo-800 pt-28 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl sm:text-4xl font-bold text-white">{{ $page->title }}</h1>
    </div>
</section>

<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if ($page->featured_image)
            <img src="{{ asset($page->featured_image) }}" alt="{{ $page->title }}" class="w-full h-64 object-cover rounded-xl mb-8">
        @endif
        <div class="prose max-w-none text-gray-600 leading-relaxed">
            {!! nl2br(e($page->content)) !!}
        </div>
    </div>
</section>
@endsection
