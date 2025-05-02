<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ResumeDownload;
use Illuminate\Support\Facades\File;

class ResumeDownloadController extends Controller
{
    public function index()
    {
        $data = ResumeDownload::all();
        return view('admin.resume.index', compact('data'));
    }
    public function add()
    {
        $data = ResumeDownload::all();
        return view('admin.resume.add', compact('data'));
    }
    public function store(Request $request)
    {
        if ($request->file != null) {
            $file = $request->file('file'); // Use 'file' instead of 'image'
            $name = time() . '.' . $file->getClientOriginalExtension();
        
            $destinationPath = 'pdf/portfolio'; // Use a suitable folder
            $file->move(public_path($destinationPath), $name);
        
            $save = new ResumeDownload();
            $save->resume_path = $name; // Use appropriate column name, e.g., 'file'
            $save->save();
        }
        
        return redirect()->route('index.resume')->with('message','added');
    }
    public function update(Request $request){
        $resume = ResumeDownload::find($request->id);
        if ($resume->resume_path && File::exists(public_path('pdf/portfolio/' . $resume->file))) {
            File::delete(public_path('pdf/portfolio/' . $resume->file));
        }
        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('pdf/portfolio'), $fileName);
    
        // Update DB
        $resume->resume_path = $fileName;
        $resume->save();
        return redirect()->route('index.resume')->with('message','Updated');
    }
    public function edit($id){
        $data = ResumeDownload::find($id);
        return view('admin.resume.edit', compact('data'));
    }
    public function delete($id){
        ResumeDownload::where('id',$id)->delete();
        return redirect()->route('index.resume.image')->with('error','Deleted');
    }
}
