<?php

namespace App\Http\Controllers;

use App\Periode;
use Illuminate\Http\Request;

class periodeController extends Controller
{
    public function index()
    {
        $data = Periode::all();
        return view('periode.index', compact('data'));
    }
}
