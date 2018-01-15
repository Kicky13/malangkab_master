<?php

namespace App\Http\Controllers;

use App\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonnelController extends Controller
{
    public function index()
    {
        $data = Personnel::join('job_position', 'administrator.position_id', '=', 'job_position.position_id')->where('admin_level', '!=', '1')->get();
        return view('personnel.index', compact('data'));
    }
    public function createView()
    {
        $data = DB::table('job_position')->get();
        return view('personnel.create', compact('data'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'register_number' => 'required|unique:administrator,register_number|max:12',
            'password' => 'required|min:6'
        ]);
        Personnel::create([
            'admin_level' => 2,
            'admin_name' => $request->nama,
            'register_number' => $request->register_number,
            'position_id' => $request->job,
            'password' => bcrypt($request->password),
            'admin_address' => $request->address
        ]);
        return redirect('/personnel');
    }
    public function updateView($id)
    {
        $data = Personnel::find($id);
        $job = DB::table('job_position')->get();
        return view('personnel.update')->with(['data' => $data, 'job' => $job]);
    }
    public function update(Request $request, $id)
    {
        if ($request->password == ''){
            Personnel::find($id)->update([
                'admin_name' => $request->nama,
                'position_id' => $request->job,
                'admin_address' => $request->address
            ]);
        } else {
            $request->validate([
                'password' => 'required|min:6'
            ]);
            Personnel::find($id)->update([
                'admin_name' => $request->nama,
                'position_id' => $request->job,
                'password' => $request->password,
                'admin_address' => $request->address
            ]);
        }
        return redirect('/personnel');
    }
    public function destroy($id)
    {
        Personnel::find($id)->delete();
        return redirect('/personnel');
    }
}
