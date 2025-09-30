<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::orderBy('sort_order')->get();
        return view('admin.pricing.index', compact('pricings'));
    }

    public function add()
    {
        return view('admin.pricing.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:3',
            'description' => 'required|string',
            'features' => 'required|array',
            'button_text' => 'required|string|max:255',
            'button_link' => 'nullable|string|max:255',
        ]);

        Pricing::create($request->all());
        return redirect()->route('index.pricing')->with('success', 'Pricing plan added successfully!');
    }

    public function edit($id)
    {
        $pricing = Pricing::findOrFail($id);
        return view('admin.pricing.edit', compact('pricing'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:3',
            'description' => 'required|string',
            'features' => 'required|array',
            'button_text' => 'required|string|max:255',
            'button_link' => 'nullable|string|max:255',
        ]);

        $pricing = Pricing::findOrFail($request->id);
        $pricing->update($request->all());
        return redirect()->route('index.pricing')->with('success', 'Pricing plan updated successfully!');
    }

    public function delete($id)
    {
        Pricing::findOrFail($id)->delete();
        return redirect()->route('index.pricing')->with('success', 'Pricing plan deleted successfully!');
    }
}
