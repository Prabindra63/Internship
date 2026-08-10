@extends('layouts.app')

@section('meta_title', 'Portfolio - ' . config('app.name'))
@section('meta_description', 'Browse our portfolio of completed projects showcasing our expertise in software development, web development, and more.')

@section('content')
<section class="bg-gradient-to-br from-blue-600 to-indigo-800 pt-28 pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl font-bold text-white">Our Portfolio</h1>
        <p class="mt-4 text-blue-100 text-lg max-w-2xl mx-auto">Showcasing our best work and the impact we deliver for our clients.</p>
    </div>
</section>

<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @forelse ($portfolios as $portfolio)
                <x-portfolio-card :portfolio="$portfolio" />
            @empty
                <div class="col-span-full text-center py-12 text-gray-500">No projects to display yet.</div>
            @endforelse
        </div>
        @if ($portfolios->hasPages())
            <div class="mt-10">
                {{ $portfolios->links() }}
            </div>
        @endif
    </div>
</section>

@include('frontend.home.cta')
@endsection
