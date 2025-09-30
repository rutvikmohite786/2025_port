<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::orderBy('created_at', 'desc')->get();
        return view('admin.newsletter.index', compact('newsletters'));
    }

    public function delete($id)
    {
        Newsletter::findOrFail($id)->delete();
        return redirect()->route('index.newsletter')->with('success', 'Newsletter subscription deleted successfully!');
    }
}
