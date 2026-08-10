@extends('layouts.app')

@section('meta_title', $post->meta_title ?: $post->title . ' - Blog - ' . config('app.name'))
@section('meta_description', $post->meta_description ?: $post->excerpt)
@section('og_image', $post->featured_image ? asset($post->featured_image) : '')

@section('content')
<section class="bg-gradient-to-br from-blue-600 to-indigo-800 pt-28 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-blue-200 mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a>
            <span class="mx-2">/</span>
            <a href="{{ route('blog') }}" class="hover:text-white">Blog</a>
            <span class="mx-2">/</span>
            <span class="text-white">{{ $post->title }}</span>
        </nav>
        <h1 class="text-3xl sm:text-4xl font-bold text-white max-w-4xl">{{ $post->title }}</h1>
        <div class="mt-4 flex items-center gap-4 text-blue-200 text-sm">
            @if ($post->author)<span>By {{ $post->author->name }}</span>@endif
            <span>{{ $post->published_at?->format('M d, Y') }}</span>
            @if ($post->category)<a href="{{ route('blog') . '?category=' . $post->category->slug }}" class="hover:text-white">{{ $post->category->name }}</a>@endif
        </div>
    </div>
</section>

<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if ($post->featured_image)
            <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-64 sm:h-96 object-cover rounded-xl mb-8">
        @endif

        @if ($post->excerpt)
            <p class="text-lg text-gray-600 italic mb-6">{{ $post->excerpt }}</p>
        @endif

        <div class="prose max-w-none text-gray-600 leading-relaxed">
            {!! nl2br(e($post->content)) !!}
        </div>
    </div>
</section>

@if ($relatedPosts->count() > 0)
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Related Posts</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @foreach ($relatedPosts as $related)
                <x-blog-card :blogPost="$related" />
            @endforeach
        </div>
    </div>
</section>
@endif

@include('frontend.home.cta')
@endsection
