<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team; 

class TeamController extends Controller
{
    public function index(){
        $data = Team::all();
        return view('admin.team.index', compact('data'));  
    }
    public function add(){
        return view('admin.team.add');
    }
    public function store(Request $request){
        if ($request->image != null) {
            $name = time() . '.' . $request->image->extension();
            $destinationPath = 'images/team';
            $request->image->move(public_path($destinationPath), $name);
            $save = new Team();
            $save->image = $name;
            $save->name  = $request->name;
            $save->designation = $request->designation;
            $save->description  = $request->desc;
            $save->save();
            return redirect()->route('index.team')->with('message','added');
      }
    }
    public function edit($id){
      $data = Team::find($id);
      return view('admin.team.edit',compact('data'));
    }
    public function delete($id){
        Team::where('id',$id)->delete();
        return redirect()->route('index.team')->with('message','added');
    }
    public function update(Request $request){
        $save = Team::find($request->id);
        if($request->image_edit){
            $name = time() . '.' . $request->image_edit->extension();
            $destinationPath = 'images/team';
            $request->image_edit->move(public_path($destinationPath), $name);
            $save->image = $name;
        }
            $save->name  = $request->name;
            $save->designation = $request->designation;
            $save->description  = $request->desc;
            $save->save();
            return redirect()->route('index.team')->with('message','added');
    
    }
}
