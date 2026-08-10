<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class WebsiteSettingController extends Controller
{
    public function index()
    {
        $settings = WebsiteSetting::getAll();

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'company_name' => 'required|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|max:255',
            'address' => 'nullable|max:500',
            'google_map_url' => 'nullable|url|max:500',
            'facebook_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'github_url' => 'nullable|url|max:255',
            'youtube_url' => 'nullable|url|max:255',
            'footer_description' => 'nullable',
            'copyright_text' => 'nullable|max:500',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,webp,ico|max:1024',
        ]);

        foreach ($data as $key => $value) {
            if (in_array($key, ['logo', 'favicon']) && $request->hasFile($key)) {
                $old = WebsiteSetting::get($key);
                $value = $this->uploadImage($request->file($key), 'settings', $old);
            } elseif (! in_array($key, ['logo', 'favicon'])) {
                continue;
            } else {
                continue;
            }
            WebsiteSetting::set($key, $value);
        }

        foreach ($data as $key => $value) {
            if (! in_array($key, ['logo', 'favicon'])) {
                WebsiteSetting::set($key, $value);
            }
        }

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully.');
    }
}
