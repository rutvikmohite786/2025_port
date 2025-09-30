<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSetting;
use Illuminate\Http\Request;

class AboutSettingController extends Controller
{
    public function index()
    {
        $aboutSettings = AboutSetting::orderBy('setting_key')->get();
        return view('admin.about-settings.index', compact('aboutSettings'));
    }

    public function edit($id)
    {
        $aboutSetting = AboutSetting::findOrFail($id);
        return view('admin.about-settings.edit', compact('aboutSetting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'setting_value' => 'required|string',
        ]);

        $aboutSetting = AboutSetting::findOrFail($request->id);
        $aboutSetting->update($request->all());
        return redirect()->route('index.about-settings')->with('success', 'About setting updated successfully!');
    }
}
