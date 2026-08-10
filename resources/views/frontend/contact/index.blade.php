@extends('layouts.app')

@section('meta_title', 'Contact Us - ' . config('app.name'))
@section('meta_description', 'Get in touch with us for innovative software solutions!')
@section('body_class', 'service-details-page')

@section('content')
<div class="page-title">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Contact Us</h1>
                    <p class="mb-0">"Get in touch with us for innovative software solutions! Whether you need custom development, expert consulting, or tech support, our team is ready to assist. Contact us today!"</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="current">Contact</li>
            </ol>
        </div>
    </nav>
</div>

<section id="contact" class="contact section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-md-6 text-center">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>{{ $settings['address'] ?? 'Kupondole, Lalitpur' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>{{ $settings['phone'] ?? '+977 9851240569' }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>{{ $settings['email'] ?? 'info@aonetech.com.np' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form method="POST" action="{{ route('contact.store') }}" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required>{{ old('message') }}</textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d186.0272305459725!2d85.31827317249763!3d27.683929412926148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b5dbdc6951%3A0x3617a59db948b2c!2sM8M9%2BG9V%2C%20Lalitpur%2044600!5e1!3m2!1sen!2snp!4v1740988021773!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
@endsection
