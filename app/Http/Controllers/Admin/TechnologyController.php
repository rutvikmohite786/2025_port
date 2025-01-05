<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;

class TechnologyController extends Controller
{
    public function index(){
        $data = Technology::all();
        return view('admin.tech.index',compact('data'));
    }
    public function add(){
        return view('admin.tech.add');
    }
    public function store(Request $request){
        Technology::create([
            'name'=>$request->name,
            'percentage'=>$request->per
        ]);
    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){
        
    }
}
