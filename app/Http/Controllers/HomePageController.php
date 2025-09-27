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
use App\Models\ResumeDownload;


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
  public function downloadCv()
  {
    $resume = ResumeDownload::first();
    $file = public_path('/pdf/portfolio/'.$resume->resume_path);
    $downloadName = 'rutvik_php_laravel_4_years.pdf';
    return response()->download($file,$downloadName);
  }

  public function contact()
  {
    if ($_GET['id'] == config('key.freelancer_key')) {
      $about = About::where('for_use', 'freelancing')->first();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'freelancing')->first();
    } else {
      $about = About::where('for_use', 'resume')->first();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'freelancing')->first();
    }
    $team = Team::all();
    return view('user.contact', compact('about', 'about_2', 'team'));
  }

  public function services()
  {
    if ($_GET['id'] == config('key.freelancer_key')) {
      $about = About::where('for_use', 'freelancing')->first();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'freelancing')->first();
    } else {
      $about = About::where('for_use', 'resume')->first();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'freelancing')->first();
    }
    $service = Service::all();
    $team = Team::all();
    return view('user.services', compact('about', 'about_2', 'service', 'team'));
  }

  public function about()
  {
    if ($_GET['id'] == config('key.freelancer_key')) {
      $about = About::where('for_use', 'freelancing')->first();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'freelancing')->first();
    } else {
      $about = About::where('for_use', 'resume')->first();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'freelancing')->first();
    }
    $tech = Technology::all();
    $experience = Experience::where('for_use', $_GET['id'] == config('key.freelancer_key') ? 'freelancing' : 'resume')->get();
    $team = Team::all();
    return view('user.about', compact('about', 'about_2', 'tech', 'experience', 'team'));
  }
}
