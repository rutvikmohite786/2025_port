<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index(){
        $data = Experience::all();
        return view('admin.experience.index',compact('data'));
    }
    public function add(){
        return view('admin.experience.add');
    }
    public function store(Request $request){
        Experience::create([
            'title'=>$request->title,
            'description'=>$request->desc,
            'company_name'=>$request->cname,
            'location'=>$request->location,
            'year'=>$request->year,
            'for_use'=>$request->for_use
        ]);
        return redirect()->route('index.experience')->with('message','added');
    }
    public function edit($id){
       $data = Experience::find($id);
       return view('admin.experience.edit',compact('data'));
    }
    public function update(Request $request){
        Experience::where('id',$request->id)->update([
            'title'=>$request->title,
            'description'=>$request->desc,
            'company_name'=>$request->cname,
            'location'=>$request->location,
            'year'=>$request->year,
            'for_use'=>$request->for_use

        ]);
        return redirect()->route('index.experience')->with('message','added');
    }
    public function delete($id){
        Experience::where('id',$id)->delete();
        return redirect()->route('index.experience')->with('error','deleted');
    }
}
