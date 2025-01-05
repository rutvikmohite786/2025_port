<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $data = Service::all();
        return view('admin.service.index',compact('data'));
    }
    public function add(){
        return view('admin.service.add');
    }
    public function store(Request $request){
        Service::create([
            'title'=>$request->title,
            'image'=>$request->image,
            'description'=>$request->desc
        ]);
        return redirect()->route('index.service')->with('message','added');
    }
    public function edit($id){
        $data = Service::find($id);
        return view('admin.service.edit',compact('data'));
    }
    public function update(Request $request){
        Service::where('id',$request->id)->update([
            'title'=>$request->title,
            'image'=>$request->image,
            'description'=>$request->desc
        ]);
        return redirect()->route('index.service')->with('message','updated');
    }
    public function delete($id){
        Service::find($id)->delete();
        return redirect()->route('index.service')->with('error','data has been delete');
    }
}
