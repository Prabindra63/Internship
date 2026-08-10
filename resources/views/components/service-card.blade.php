<div class="group bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
    @if ($service->featured_image)
        <div class="overflow-hidden">
            <img src="{{ asset($service->featured_image) }}" alt="{{ $service->title }}" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
        </div>
    @endif
    <div class="p-6">
        @if ($service->icon)
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                <i class="{{ $service->icon }} text-blue-600 text-xl"></i>
            </div>
        @endif
        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $service->title }}</h3>
        <p class="text-gray-600 text-sm leading-relaxed">{{ $service->short_description }}</p>
        <a href="{{ route('services.show', $service->slug) }}" class="mt-4 inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-700 transition-colors">
            Learn More
            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
    </div>
</div>
