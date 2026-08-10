<div class="group bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300">
    <div class="relative overflow-hidden">
        @if ($portfolio->featured_image)
            <img src="{{ asset($portfolio->featured_image) }}" alt="{{ $portfolio->title }}" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
        @else
            <div class="w-full h-56 bg-gradient-to-br from-blue-100 to-blue-50 flex items-center justify-center">
                <svg class="w-12 h-12 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
            </div>
        @endif
        <div class="absolute inset-0 bg-blue-600/90 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <a href="{{ route('portfolio.show', $portfolio->slug) }}" class="px-6 py-2 bg-white text-blue-600 rounded-lg font-medium text-sm hover:bg-gray-100 transition-colors">
                View Details
            </a>
        </div>
    </div>
    <div class="p-5">
        <h3 class="font-semibold text-gray-900 mb-1">{{ $portfolio->title }}</h3>
        <p class="text-gray-600 text-sm">{{ $portfolio->short_description }}</p>
    </div>
</div>
