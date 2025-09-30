<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index()
    {
        $socialMedia = SocialMedia::orderBy('sort_order')->get();
        return view('admin.social-media.index', compact('socialMedia'));
    }

    public function add()
    {
        return view('admin.social-media.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'url' => 'required|url',
            'icon' => 'nullable|string|max:255',
        ]);

        SocialMedia::create($request->all());
        return redirect()->route('index.social-media')->with('success', 'Social media link added successfully!');
    }

    public function edit($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);
        return view('admin.social-media.edit', compact('socialMedia'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'platform' => 'required|string|max:255',
            'url' => 'required|url',
            'icon' => 'nullable|string|max:255',
        ]);

        $socialMedia = SocialMedia::findOrFail($request->id);
        $socialMedia->update($request->all());
        return redirect()->route('index.social-media')->with('success', 'Social media link updated successfully!');
    }

    public function delete($id)
    {
        SocialMedia::findOrFail($id)->delete();
        return redirect()->route('index.social-media')->with('success', 'Social media link deleted successfully!');
    }
}
