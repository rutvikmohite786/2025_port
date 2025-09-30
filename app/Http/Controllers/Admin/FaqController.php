<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('sort_order')->get();
        return view('admin.faq.index', compact('faqs'));
    }

    public function add()
    {
        return view('admin.faq.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        Faq::create($request->all());
        return redirect()->route('index.faq')->with('success', 'FAQ added successfully!');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $faq = Faq::findOrFail($request->id);
        $faq->update($request->all());
        return redirect()->route('index.faq')->with('success', 'FAQ updated successfully!');
    }

    public function delete($id)
    {
        Faq::findOrFail($id)->delete();
        return redirect()->route('index.faq')->with('success', 'FAQ deleted successfully!');
    }
}
