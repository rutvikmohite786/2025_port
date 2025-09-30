<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutValue;
use Illuminate\Http\Request;

class AboutValueController extends Controller
{
    public function index()
    {
        $aboutValues = AboutValue::orderBy('sort_order')->get();
        return view('admin.about-values.index', compact('aboutValues'));
    }

    public function add()
    {
        return view('admin.about-values.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'sort_order' => 'required|integer|min:0',
        ]);

        AboutValue::create($request->all());
        return redirect()->route('index.about-values')->with('success', 'About value added successfully!');
    }

    public function edit($id)
    {
        $aboutValue = AboutValue::findOrFail($id);
        return view('admin.about-values.edit', compact('aboutValue'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'sort_order' => 'required|integer|min:0',
        ]);

        $aboutValue = AboutValue::findOrFail($request->id);
        $aboutValue->update($request->all());
        return redirect()->route('index.about-values')->with('success', 'About value updated successfully!');
    }

    public function delete($id)
    {
        AboutValue::findOrFail($id)->delete();
        return redirect()->route('index.about-values')->with('success', 'About value deleted successfully!');
    }
}
