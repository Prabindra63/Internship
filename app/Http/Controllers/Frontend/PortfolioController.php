<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::active()->latest()->paginate(12);

        return view('frontend.portfolio.index', compact('portfolios'));
    }

    public function show(string $slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->where('status', true)->firstOrFail();
        $related = Portfolio::active()->where('id', '!=', $portfolio->id)->take(3)->get();

        return view('frontend.portfolio.show', compact('portfolio', 'related'));
    }
}
