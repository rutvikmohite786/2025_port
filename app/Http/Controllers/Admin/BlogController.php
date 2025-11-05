<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
       $data = Blog::all();
       return view('admin.blog.index', compact('data'));
    }
    public function add(){
      return view('admin.blog.add');
    }
    public function store(Request $request){
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blog'), $imageName);
        }
        
        Blog::create([
            'title' => $request->title,
            'description' => $request->desc,
            'image' => $imageName,
            'url' => $request->url,
            'tag' => $request->tag,
            'date' => $request->date
        ]);
        return redirect()->route('index.blog')->with('message', 'Blog added successfully');
    }
    public function edit($id){
        $data = Blog::find($id);
        return view('admin.blog.edit', compact('data'));
    }
    public function update(Request $request){
        $blog = Blog::find($request->id);
        $imageName = $blog->image; // Keep existing image by default
        
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image && file_exists(public_path('images/blog/' . $blog->image))) {
                unlink(public_path('images/blog/' . $blog->image));
            }
            
            // Upload new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blog'), $imageName);
        }
        
        Blog::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->desc,
            'image' => $imageName,
            'url' => $request->url,
            'tag' => $request->tag,
            'date' => $request->date
        ]);
        return redirect()->route('index.blog')->with('message', 'Blog updated successfully');
    }
    public function delete($id){
        Blog::find($id)->delete();
        return redirect()->route('index.blog')->with('error', 'Blog deleted successfully');
    }
}
