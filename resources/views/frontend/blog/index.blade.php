@extends('layouts.app')

@section('meta_title', 'Blog - ' . config('app.name'))
@section('meta_description', 'Stay up to date with our latest news, insights, and technology trends.')

@section('content')
<section class="bg-gradient-to-br from-blue-600 to-indigo-800 pt-28 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl font-bold text-white">Our Blog</h1>
        <p class="mt-4 text-blue-100 text-lg max-w-2xl mx-auto">Insights, tutorials, and updates from our team.</p>
    </div>
</section>

<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if ($categories->count() > 0)
            <div class="flex flex-wrap gap-2 mb-10 justify-center">
                <a href="{{ route('blog') }}" class="px-4 py-2 text-sm rounded-full {{ !request('category') ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100' }} transition-colors">All</a>
                @foreach ($categories as $cat)
                    <a href="{{ route('blog') . '?category=' . $cat->slug }}" class="px-4 py-2 text-sm rounded-full {{ request('category') == $cat->slug ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100' }} transition-colors">{{ $cat->name }}</a>
                @endforeach
            </div>
        @endif

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @forelse ($posts as $post)
                <x-blog-card :blogPost="$post" />
            @empty
                <div class="col-span-full text-center py-12 text-gray-500">No posts published yet.</div>
            @endforelse
        </div>

        @if ($posts->hasPages())
            <div class="mt-10">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</section>

@include('frontend.home.cta')
@endsection
