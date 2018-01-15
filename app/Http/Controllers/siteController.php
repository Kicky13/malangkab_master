<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index()
    {
        $data = Site::all();
        return view('site.index', compact('data'));
    }
    public function createView()
    {
        return view('site.create');
    }
    public function create(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);
        Site::create([
            'site_name' => $request->nama,
            'site_description' => $request->description,
            'site_city' => $request->city,
            'site_province' => $request->province,
            'site_url' => $request->url
        ]);
        return redirect('/site');
    }
    public function updateView($id)
    {
        $data = Site::find($id);
        return view('site.update', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'url' => 'required|url'
        ]);
        Site::find($id)->update([
            'site_name' => $request->nama,
            'site_description' => $request->description,
            'site_city' => $request->city,
            'site_province' => $request->province,
            'site_url' => $request->url
        ]);
        return redirect('/site');
    }
}
