<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
    <div class="flex items-center gap-1 mb-4">
        @for ($i = 1; $i <= 5; $i++)
            <svg class="w-5 h-5 {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
        @endfor
    </div>
    <p class="text-gray-600 text-sm leading-relaxed mb-4 italic">"{{ $testimonial->message }}"</p>
    <div class="flex items-center gap-3">
        @if ($testimonial->client_image)
            <img src="{{ asset($testimonial->client_image) }}" alt="{{ $testimonial->client_name }}" class="w-10 h-10 rounded-full object-cover">
        @else
            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                <span class="text-blue-600 font-semibold text-sm">{{ substr($testimonial->client_name, 0, 1) }}</span>
            </div>
        @endif
        <div>
            <p class="font-medium text-gray-900 text-sm">{{ $testimonial->client_name }}</p>
            @if ($testimonial->company_name)
                <p class="text-gray-500 text-xs">{{ $testimonial->company_name }}</p>
            @endif
        </div>
    </div>
</div>
