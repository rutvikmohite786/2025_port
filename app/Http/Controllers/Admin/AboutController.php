<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function index()
   {
      $data = About::all();
      return view('admin.about.index', compact('data'));
   }
   public function add()
   {
      return view('admin.about.add');
   }
   public function store(Request $request)
   {
      About::create([
         'title' => $request->title,
         'description' => $request->desc,
         'for_use'=>$request->for_use
      ]);
      return redirect()->route('index.about')->with('message','added');
   }
   public function edit($id)
   {
      $data = About::find($id);
      return view('admin.about.edit', compact('data'));
   }
   public function update(Request $request)
   {
      About::where('id', $request->id)->update([
         'title' => $request->title,
         'description' => $request->desc,
         'for_use'=>$request->for_use
      ]);
      return redirect()->route('index.about')->with('message','updated');
   }
   public function delete($id)
   {
      About::find($id)->delete();
      return redirect()->route('index.about')->with('error','record has been delete');
   }
}
