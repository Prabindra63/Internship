@extends('layouts.app')

@section('meta_title', $portfolio->title . ' - Portfolio - ' . config('app.name'))
@section('meta_description', $portfolio->short_description)

@section('content')
<section class="bg-gradient-to-br from-blue-600 to-indigo-800 pt-28 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="text-sm text-blue-200 mb-4">
            <a href="{{ route('home') }}" class="hover:text-white">Home</a>
            <span class="mx-2">/</span>
            <a href="{{ route('portfolio') }}" class="hover:text-white">Portfolio</a>
            <span class="mx-2">/</span>
            <span class="text-white">{{ $portfolio->title }}</span>
        </nav>
        <h1 class="text-3xl sm:text-4xl font-bold text-white">{{ $portfolio->title }}</h1>
    </div>
</section>

<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-12">
            <div class="lg:col-span-2">
                @if ($portfolio->featured_image)
                    <img src="{{ asset($portfolio->featured_image) }}" alt="{{ $portfolio->title }}" class="w-full h-64 sm:h-80 object-cover rounded-xl mb-8">
                @endif
                <div class="text-gray-600 leading-relaxed">
                    {!! nl2br(e($portfolio->description)) !!}
                </div>
            </div>
            <div class="lg:col-span-1">
                <div class="bg-gray-50 rounded-xl p-6 sticky top-24">
                    <h3 class="font-semibold text-gray-900 mb-4">Project Details</h3>
                    <dl class="space-y-3 text-sm">
                        @if ($portfolio->client_name)
                            <div><dt class="text-gray-500">Client</dt><dd class="font-medium text-gray-900">{{ $portfolio->client_name }}</dd></div>
                        @endif
                        @if ($portfolio->completion_date)
                            <div><dt class="text-gray-500">Completed</dt><dd class="font-medium text-gray-900">{{ $portfolio->completion_date->format('M Y') }}</dd></div>
                        @endif
                        @if ($portfolio->technologies_used)
                            <div><dt class="text-gray-500">Technologies</dt><dd class="mt-1 flex flex-wrap gap-2">@foreach($portfolio->technologies_used as $tech)<span class="px-2 py-1 bg-gray-200 text-gray-700 text-xs rounded">{{ $tech }}</span>@endforeach</dd></div>
                        @endif
                        @if ($portfolio->project_url)
                            <div class="pt-3"><a href="{{ $portfolio->project_url }}" target="_blank" class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-700 font-medium">Visit Project <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg></a></div>
                        @endif
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
