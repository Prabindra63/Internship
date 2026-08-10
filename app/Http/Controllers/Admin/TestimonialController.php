<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);

        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'client_name' => 'required|max:255',
            'client_position' => 'nullable|max:255',
            'company_name' => 'nullable|max:255',
            'message' => 'required',
            'client_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'rating' => 'required|integer|min:1|max:5',
            'status' => 'boolean',
        ]);

        if ($request->hasFile('client_image')) {
            $data['client_image'] = $this->uploadImage($request->file('client_image'), 'testimonials');
        }

        $data['status'] = $request->boolean('status');

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'client_name' => 'required|max:255',
            'client_position' => 'nullable|max:255',
            'company_name' => 'nullable|max:255',
            'message' => 'required',
            'client_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'rating' => 'required|integer|min:1|max:5',
            'status' => 'boolean',
        ]);

        if ($request->hasFile('client_image')) {
            $data['client_image'] = $this->uploadImage($request->file('client_image'), 'testimonials', $testimonial->client_image);
        }

        $data['status'] = $request->boolean('status');

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->client_image && file_exists(public_path($testimonial->client_image))) {
            @unlink(public_path($testimonial->client_image));
        }
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
