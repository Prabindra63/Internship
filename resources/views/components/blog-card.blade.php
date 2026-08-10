@php
    $post = $blogPost;
@endphp
<article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
    <a href="{{ route('blog.show', $post->slug) }}" class="block">
        @if ($post->featured_image)
            <div class="overflow-hidden">
                <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
            </div>
        @else
            <div class="w-full h-48 bg-gradient-to-br from-gray-100 to-gray-50 flex items-center justify-center">
                <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
            </div>
        @endif
    </a>
    <div class="p-5">
        @if ($post->category)
            <span class="inline-block px-3 py-1 text-xs font-medium bg-blue-100 text-blue-600 rounded-full mb-3">{{ $post->category->name }}</span>
        @endif
        <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">
            <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-blue-600 transition-colors">{{ $post->title }}</a>
        </h3>
        <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $post->excerpt }}</p>
        <div class="flex items-center justify-between text-xs text-gray-500">
            <span>{{ $post->published_at?->format('M d, Y') }}</span>
            <a href="{{ route('blog.show', $post->slug) }}" class="text-blue-600 font-medium hover:text-blue-700">Read More</a>
        </div>
    </div>
</article>
