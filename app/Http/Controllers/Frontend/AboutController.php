<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\Technology;
use App\Models\WebsiteSetting;

class AboutController extends Controller
{
    public function index()
    {
        $settings = WebsiteSetting::getAll();
        $team = TeamMember::active()->get();
        $technologies = Technology::active()->get();

        return view('frontend.about.index', compact('settings', 'team', 'technologies'));
    }
}
