<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioDetail;
use App\Models\Portfolio;


class PortfolioDetailController extends Controller
{
    //
    public function index()
    {
        $data = PortfolioDetail::with('detail')->get();
        return view('admin.details.index', compact('data'));
    }
    public function add()
    {
        $data = Portfolio::all();
        return view('admin.details.add', compact('data'));
    }
    public function store(Request $request)
    {
        PortfolioDetail::create([
            'link_1' => $request->link1,
            'link_2' => $request->link2,
            'duration' => $request->duration,
            'portfolio_id' => $request->port,
            'details' => $request->desc,
        ]);
        return redirect()->route('index.portfolio.detail')->with('message', 'added');
    }
    public function edit($id)
    {
        $data = PortfolioDetail::with('detail')->where('id', $id)->first();
        $port_id =  Portfolio::all();
        return view('admin.details.edit', compact('data','port_id'));
    }
    public function update(Request $request)
    {
       PortfolioDetail::where('id',$request->id)->update([
        'link_1' => $request->link1,
        'link_2' => $request->link2,
        'duration' => $request->duration,
        'portfolio_id' => $request->port,
        'details' => $request->desc,
    ]);
    return redirect()->route('index.portfolio.detail')->with('message', 'updated');
    }
    public function delete($id){
        PortfolioDetail::where('id',$id)->delete();
        return redirect()->route('index.portfolio.detail')->with('error', 'removed');
    }

    public function portfolioDetail(Request $request){
        $data = Portfolio::with('images','details')->where('id', $request->id)->first();
        $html = view('user.modal', compact('data'))->render();
        return response()->json([
            'html' => $html
        ]);
    }
}