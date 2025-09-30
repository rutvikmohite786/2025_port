<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutContent;
use Illuminate\Http\Request;

class AboutContentController extends Controller
{
    public function index()
    {
        $aboutContents = AboutContent::orderBy('section_type')->get();
        return view('admin.about-content.index', compact('aboutContents'));
    }

    public function add()
    {
        return view('admin.about-content.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'section_type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
        ]);

        AboutContent::create($request->all());
        return redirect()->route('index.about-content')->with('success', 'About content added successfully!');
    }

    public function edit($id)
    {
        $aboutContent = AboutContent::findOrFail($id);
        return view('admin.about-content.edit', compact('aboutContent'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'section_type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
        ]);

        $aboutContent = AboutContent::findOrFail($request->id);
        $aboutContent->update($request->all());
        return redirect()->route('index.about-content')->with('success', 'About content updated successfully!');
    }

    public function delete($id)
    {
        AboutContent::findOrFail($id)->delete();
        return redirect()->route('index.about-content')->with('success', 'About content deleted successfully!');
    }
}
