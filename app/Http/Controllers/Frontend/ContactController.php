<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $settings = WebsiteSetting::getAll();

        return view('frontend.contact.index', compact('settings'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        $data['status'] = 'unread';

        ContactMessage::create($data);

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully. We will get back to you soon!');
    }
}
