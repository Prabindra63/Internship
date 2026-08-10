<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::latest()->paginate(10);

        return view('admin.technologies.index', compact('technologies'));
    }

    public function create()
    {
        return view('admin.technologies.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'nullable|max:255|unique:technologies,slug',
            'icon' => 'nullable|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'category' => 'nullable|max:255',
            'description' => 'nullable',
            'status' => 'boolean',
            'sort_order' => 'integer|min:0',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $this->uploadImage($request->file('logo'), 'technologies');
        }

        $data['status'] = $request->boolean('status');

        Technology::create($data);

        return redirect()->route('admin.technologies.index')->with('success', 'Technology created successfully.');
    }

    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    public function update(Request $request, Technology $technology)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'nullable|max:255|unique:technologies,slug,'.$technology->id,
            'icon' => 'nullable|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'category' => 'nullable|max:255',
            'description' => 'nullable',
            'status' => 'boolean',
            'sort_order' => 'integer|min:0',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $this->uploadImage($request->file('logo'), 'technologies', $technology->logo);
        }

        $data['status'] = $request->boolean('status');

        $technology->update($data);

        return redirect()->route('admin.technologies.index')->with('success', 'Technology updated successfully.');
    }

    public function destroy(Technology $technology)
    {
        if ($technology->logo && file_exists(public_path($technology->logo))) {
            @unlink(public_path($technology->logo));
        }
        $technology->delete();

        return redirect()->route('admin.technologies.index')->with('success', 'Technology deleted successfully.');
    }
}
