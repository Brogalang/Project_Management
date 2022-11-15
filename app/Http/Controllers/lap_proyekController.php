<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\project;
use App\Models\lap_proyek;
use DB;

class lap_proyekController extends Controller
{
    public function index()
    {
        $projects = project::all();
        if (Auth::check()) {
            return view('lap_proyek.index',compact('projects'));
        }else{
            return redirect('/');
        }
    }

    public function loaddata(){
        $listdata = DB::table('projects_status')
                    ->join('projects', 'projects.project_id', '=', 'projects_status.project_id')
                    ->orderby('projects_status.id_progress','asc')
                    ->get();
        return response()->json([
            'listdata' => $listdata,
        ]);
    }

    public function store(Request $request)
    {
        if ($request->metode=='insertdata') {
            $request->validate([
                'prjprogres' => 'required',
                'nmprogres' => 'required',
            ]);
            lap_proyek::insert([
                'project_id' => $request->prjprogres,
                'nama_progress' => $request->nmprogres,
                'status_progress' => $request->statprogres,
                'catatan_progress' => $request->catatan,
                'tanggal_progress' => $request->tglprogres,
                'updated_at' => date('Y-m-d h:i:s'),
                'created_at' => date('Y-m-d h:i:s')
                ]);
            return response()->json(['success' => 'Data saved successfully.']);
        }else if ($request->metode=='editdata') {
            $request->validate([
                'prjprogres' => 'required',
                'nmprogres' => 'required',
            ]);
            lap_proyek::where('id_progress', '=', $request->id_progres)->update([
                'project_id' => $request->prjprogres,
                'nama_progress' => $request->nmprogres,
                'status_progress' => $request->statprogres,
                'catatan_progress' => $request->catatan,
                'tanggal_progress' => $request->tglprogres,
                'updated_at' => date('Y-m-d h:i:s')
            ]);
            return response()->json(['success' => 'Data updated successfully.']);
        }
    }

    public function edit_lap(Request $request)
    {
        $listdata = lap_proyek::where('id_progress', '=', $request->id_progres)
                                ->join('projects', 'projects.project_id', '=', 'projects_status.project_id')
                                ->get();
        return response()->json([
            'listdata' => $listdata,
        ]);
    }

    public function delete_lap(Request $request)
    {
        lap_proyek::where('id_progress', '=', $request->id_progres)->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }

}
