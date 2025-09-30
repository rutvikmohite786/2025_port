<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Technology;
use App\Models\Service;
use App\Models\Experience;
use App\Models\PortTech;
use App\Models\Portfolio;
use App\Models\PortfolioDetail;
use App\Models\PortfolioImage;
use App\Models\Contact;
use App\Models\Team;
use App\Models\Blog;
use App\Models\ResumeDownload;
use App\Models\AboutValue;
use App\Models\AboutContent;
use App\Models\AboutSetting;


class HomePageController extends Controller
{
  public function index()
  {
    // Check if ID parameter exists and matches freelancer key
    $isFreelancer = isset($_GET['id']) && $_GET['id'] == config('key.freelancer_key');
    
    if ($isFreelancer) {
      $about = About::where('for_use', 'freelancing')->first();
      $experience = Experience::where('for_use', 'freelancing')->get();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'freelancing')->first();
    } else {
      $about = About::where('for_use', 'resume')->first();
      $experience = Experience::where('for_use', 'resume')->get();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'resume')->first();
    }
    $team = Team::all();
    $tech = Technology::all();
    $service = Service::all();
    $porttech = PortTech::all();
    $portfolio = Portfolio::with('techport')->get();
    $blogs = Blog::orderBy('created_at', 'desc')->limit(4)->get();
    return view('user.index', compact('about', 'tech', 'service', 'experience', 'porttech', 'portfolio', 'team', 'about_2', 'blogs'));
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
    $blogs = Blog::orderBy('created_at', 'desc')->limit(4)->get();
    return view('user.contact', compact('about', 'about_2', 'team', 'blogs'));
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
    $blogs = Blog::orderBy('created_at', 'desc')->limit(4)->get();
    return view('user.services', compact('about', 'about_2', 'service', 'team', 'blogs'));
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
    $blogs = Blog::orderBy('created_at', 'desc')->limit(4)->get();
    
    // New dynamic content
    $aboutValues = AboutValue::where('is_active', true)->orderBy('sort_order')->get();
    $aboutContents = AboutContent::where('is_active', true)->get();
    $aboutSettings = AboutSetting::where('is_active', true)->get();
    
    return view('user.about', compact('about', 'about_2', 'tech', 'experience', 'team', 'blogs', 'aboutValues', 'aboutContents', 'aboutSettings'));
  }

  public function getPortfolioDetails(Request $request)
  {
    $portfolioId = $request->id;
    $portfolio = Portfolio::with(['details', 'images', 'techport'])->find($portfolioId);
    
    if (!$portfolio) {
      return response()->json(['error' => 'Portfolio not found'], 404);
    }
    
    return response()->json([
      'portfolio' => $portfolio,
      'details' => $portfolio->details,
      'images' => $portfolio->images,
      'tech' => $portfolio->techport
    ]);
  }

  public function serviceDetail($id)
  {
    if ($_GET['id'] == config('key.freelancer_key')) {
      $about = About::where('for_use', 'freelancing')->first();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'freelancing')->first();
    } else {
      $about = About::where('for_use', 'resume')->first();
      $about_2 = About::orderBy('id', 'DESC')->where('for_use', 'freelancing')->first();
    }
    
    $service = Service::find($id);
    $team = Team::all();
    $blogs = Blog::orderBy('created_at', 'desc')->limit(4)->get();
    
    if (!$service) {
      abort(404, 'Service not found');
    }
    
    return view('user.service-detail', compact('service', 'about', 'about_2', 'team', 'blogs'));
  }
}
