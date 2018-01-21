<?php

namespace App\Http\Controllers;

use App\Kuesioner;
use App\Periode;
use App\Respondent;
use App\Response;
use App\Site;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class KuesionerController extends Controller
{

    public function index()
    {
        $data = Kuesioner::join('dimension', 'dimension.dimension_id', '=', 'question.dimension_id')->get();
        return view('question.question.index', compact('data'));
    }

    public function public1()
    {
        $web = Site::all();
        return view('public.infoKuis', compact('web'));
    }

    public function public2()
    {
        $data = Kuesioner::all()->sortBy('dimension_id');
        return view('public.coreKuesioner', compact('data'));
    }

    public function tempInfor(Request $request)
    {
        $site = Site::find($request->web);
        $request->session()->put('name', $request->name);
        $request->session()->put('age', $request->age);
        $request->session()->put('address', $request->address);
        $request->session()->put('web', $request->web);
        $request->session()->put('url', $site->site_url);
        return redirect('/kuesioner/public2');
    }
    public function publicSubmit(Request $request)
    {
        $periode = new Periode();
        $now = $periode->nowPeriode();
        $name = $request->input('name');
        $age = $request->input('age');
        $address = $request->input('address');
        $web = $request->input('web');
        $label = 'PUB';
        $question = Kuesioner::all()->sortBy('dimension_id');
        Respondent::create([
            'respondent_label' => $label,
            'respondent_name' => $name,
            'respondent_age' => $age,
            'respondent_address' => $address
        ]);
        $respondent = Respondent::select('respondent_id')->orderBy('respondent_id', 'desc')->first();
        foreach ($question as $value){
            $id = $value->question_id;
            $label = $value->question_label;
            $scale = $request->input($label);
            Response::create([
                'site_id' => $web,
                'respondent_id' => $respondent->respondent_id,
                'periode_id' => $now,
                'question_id' => $id,
                'response_value' => $scale
            ]);
        }
        return redirect('/kuesioner/public1');
    }
    public function destroyQuestion($id)
    {
        Kuesioner::find($id)->delete();
        return redirect('/kuesioner');
    }
}
