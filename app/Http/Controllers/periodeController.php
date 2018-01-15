<?php

namespace App\Http\Controllers;

use App\Periode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class periodeController extends Controller
{
    public function index()
    {
        $data = Periode::all();
        return view('periode.index', compact('data'));
    }
    public function create(Request $request)
    {
        $x = $request->nilai;
        $date = new Carbon(now());
        if ($date->month < 7){
            $month = 'JAN - JUN';
        } else {
            $month = 'JUL - DES';
        }
        $jumlah = Periode::where([
            ['periode_month', $month],
            ['periode_years', $date->year]
        ])->count();
        if ($jumlah > 0){
            echo '1';
        } else {
            Periode::create([
                'periode_month' => $month,
                'periode_years' => $date->year
            ]);
            echo '2';
        }
    }
}
