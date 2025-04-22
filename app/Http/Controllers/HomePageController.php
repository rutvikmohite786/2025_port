<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Technology;
use App\Models\Service;
use App\Models\Experience;
use App\Models\PortTech;
use App\Models\Portfolio;
use App\Models\Contact;
use App\Models\Team;


class HomePageController extends Controller
{
  public function index()
  {

    if ($_GET['id'] == config('key.freelancer_key')) {
      $about = About::where('for_use', 'freelancing')->first();
      $experience = Experience::where('for_use', 'freelancing')->get();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'freelancing')->first();
    } else {
      $about = About::where('for_use', 'resume')->first();
      $experience = Experience::where('for_use', 'resume')->get();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'freelancing')->first();
    }
    $team = Team::all();
    $tech = Technology::all();
    $service = Service::all();
    $porttech = PortTech::all();
    $portfolio = Portfolio::with('techport')->get();
    return view('user.index', compact('about', 'tech', 'service', 'experience', 'porttech', 'portfolio', 'team', 'about_2'));
  }
  public function contactStore(Request $request)
  {
    Contact::create([
      'name' => $request->name,
      'email' => $request->email,
      'subject' => $request->subject,
      'message' => $request->message
    ]);
    return response()->json([
      'status' => 'success',
      'message' => 'Data submitted successfully!',
    ]);
  }
  public function redirectBack()
  {
    return redirect()->back()->with('success', 'your message,here');
  }
}
