<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);

        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'nullable|max:255|unique:portfolios,slug',
            'short_description' => 'nullable',
            'description' => 'nullable',
            'client_name' => 'nullable|max:255',
            'project_url' => 'nullable|url|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'technologies_used' => 'nullable',
            'completion_date' => 'nullable|date',
            'status' => 'boolean',
            'featured' => 'boolean',
        ]);

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $this->uploadImage($request->file('featured_image'), 'portfolio');
        }

        $data['status'] = $request->boolean('status');
        $data['featured'] = $request->boolean('featured');
        $data['technologies_used'] = $request->technologies_used ? array_map('trim', explode(',', $request->technologies_used)) : [];

        Portfolio::create($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'nullable|max:255|unique:portfolios,slug,'.$portfolio->id,
            'short_description' => 'nullable',
            'description' => 'nullable',
            'client_name' => 'nullable|max:255',
            'project_url' => 'nullable|url|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'technologies_used' => 'nullable',
            'completion_date' => 'nullable|date',
            'status' => 'boolean',
            'featured' => 'boolean',
        ]);

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $this->uploadImage($request->file('featured_image'), 'portfolio', $portfolio->featured_image);
        }

        $data['status'] = $request->boolean('status');
        $data['featured'] = $request->boolean('featured');
        $data['technologies_used'] = $request->technologies_used ? array_map('trim', explode(',', $request->technologies_used)) : [];

        $portfolio->update($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->featured_image && file_exists(public_path($portfolio->featured_image))) {
            @unlink(public_path($portfolio->featured_image));
        }
        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio deleted successfully.');
    }
}
