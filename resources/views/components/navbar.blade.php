@php
    $companyName = \App\Models\WebsiteSetting::get('company_name', config('app.name'));
    $logo = \App\Models\WebsiteSetting::get('logo');
@endphp
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
            @if ($logo)
                <img src="{{ asset($logo) }}" alt="">
            @else
                <img src="https://aonetech.com.np/assets/img/a-logo.png" alt="">
            @endif
            <h1 class="sitename">A.One National <br> <span class="break-title">Technology Pvt Ltd.</span></h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li class="dropdown">
                    <a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('services.show', 'software-development') }}">Software Development</a></li>
                        <li><a href="{{ route('services.show', 'web-development') }}">Web Development</a></li>
                        <li><a href="{{ route('services.show', 'mobile-app-development') }}">Mobile App Development</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
