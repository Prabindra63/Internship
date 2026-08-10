@extends('layouts.app')

@section('meta_title', $service->meta_title ?: $service->title . ' - ' . config('app.name'))
@section('meta_description', $service->meta_description ?: $service->short_description)
@section('body_class', 'service-details-page')

@section('content')
<div class="page-title">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>{{ $service->title }}</h1>
                    @if ($service->short_description)
                        <p class="mb-0">{{ $service->short_description }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Service</a></li>
                <li class="current">{{ $service->title }}</li>
            </ol>
        </div>
    </nav>
</div>

<section id="service-details" class="service-details section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                @if ($service->featured_image)
                    <img src="{{ asset($service->featured_image) }}" alt="" class="img-fluid services-img">
                @endif
                <div class="text-gray-600 leading-relaxed">
                    {!! nl2br(e($service->description)) !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
