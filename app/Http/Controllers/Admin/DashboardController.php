<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Client;
use App\Models\ContactMessage;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Technology;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [
            'totalServices' => Service::count(),
            'totalProjects' => Portfolio::count(),
            'totalPosts' => BlogPost::count(),
            'totalClients' => Client::count(),
            'totalTestimonials' => Testimonial::count(),
            'totalTechnologies' => Technology::count(),
            'totalMessages' => ContactMessage::count(),
            'unreadMessages' => ContactMessage::where('status', 'unread')->count(),
        ]);
    }
}
