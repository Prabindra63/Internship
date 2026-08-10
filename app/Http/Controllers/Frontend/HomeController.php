<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Technology;
use App\Models\Testimonial;
use App\Models\WebsiteSetting;

class HomeController extends Controller
{
    public function index()
    {
        $settings = WebsiteSetting::getAll();
        $services = Service::active()->get();
        $portfolios = Portfolio::active()->featured()->latest()->take(6)->get();
        $technologies = Technology::active()->get();
        $clients = Client::active()->get();
        $testimonials = Testimonial::active()->get();
        $posts = BlogPost::published()->latest()->take(3)->get();

        //  dd($settings, $services, $portfolios, $technologies, $clients, $testimonials, $posts);

        return view('frontend.home.index', compact(
            'settings', 'services', 'portfolios', 'technologies',
            'clients', 'testimonials', 'posts'
        ));
    }
}
