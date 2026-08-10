@extends('layouts.app')

@section('meta_title', 'Our Services - ' . config('app.name'))
@section('meta_description', 'Explore our comprehensive range of technology services.')
@section('body_class', 'service-details-page')

@section('content')
<div class="page-title">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Our Services</h1>
                    <p class="mb-0">Comprehensive technology solutions tailored to your business needs.</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="current">Services</li>
            </ol>
        </div>
    </nav>
</div>

<section id="services" class="services section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>What We Offer</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
            @forelse ($services as $service)
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="{{ 200 + ($loop->index * 100) }}">
                    <div class="service-item">
                        <div class="img">
                            @if ($service->featured_image)
                                <img src="{{ asset($service->featured_image) }}" class="img-fluid" alt="">
                            @endif
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <a href="{{ route('services.show', $service->slug) }}" class="stretched-link">
                                <h3>{{ $service->title }}</h3>
                            </a>
                            <p>{{ $service->short_description }}</p>
                            <a href="{{ route('services.show', $service->slug) }}" class="read-more stretched-link" style="line-height: 36px;">
                                <span>Read More</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">No services available yet.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
