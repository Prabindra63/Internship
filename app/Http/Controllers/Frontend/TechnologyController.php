<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Technology;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::active()->get();
        $categories = $technologies->groupBy('category');

        return view('frontend.technologies.index', compact('technologies', 'categories'));
    }
}
