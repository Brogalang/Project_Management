<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\project;
use App\Models\lap_proyek;
use App\Models\Prj_Pending;
use App\Models\TaskModel;
use DB;
use SebastianBergmann\Environment\Console;

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

    public function loaddata(Request $request){
        $listdata = DB::table('projects_status')
                    ->join('projects', 'projects.project_id', '=', 'projects_status.project_id')
                    ->where('projects_status.project_id', '=', $request->project_id)
                    ->orderby('projects_status.id_progress','asc')
                    ->get();
        return response()->json([
            'listdata' => $listdata,
        ]);
    }
    public function loadpending(Request $request){
        $listpending = DB::table('projects_pending')
                    ->join('projects', 'projects.project_id', '=', 'projects_pending.project_id')
                    ->where('projects_pending.project_id', '=', $request->project_id)
                    ->orderby('projects_pending.id_pending','asc')
                    ->get();
        return response()->json([
            'listpending' => $listpending,
        ]);
    }
    public function loadtask(Request $request){
        $listtask = DB::table('tasklist')
                    ->join('projects', 'projects.project_id', '=', 'tasklist.project_id')
                    ->where('tasklist.project_id', '=', $request->project_id)
                    ->orderby('tasklist.id_task','asc')
                    ->get();
        return response()->json([
            'listtask' => $listtask,
        ]);
    }

    public function store(Request $request)
    {
        echo $request->metode;
        if ($request->metode=='insertdata') {
            $request->validate([
                'prjprogres' => 'required',
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
        }else if($request->metode=='insertpending'){
            $request->validate([
                'prjpending' => 'required',
                'statpending' => 'required',
            ]);
            Prj_Pending::insert([
                'project_id' => $request->prjpending,
                'status_pending' => $request->statpending,
                'deskripsi_pending' => $request->despending,
                'updated_at' => date('Y-m-d h:i:s'),
                'created_at' => date('Y-m-d h:i:s')
                ]);
            return response()->json(['successw' => 'Data saved successfully.']);
        }else if($request->metode=='editpending'){
            $request->validate([
                'prjpending' => 'required',
            ]);
            Prj_Pending::where('id_pending', '=', $request->id_pending)->update([
                'project_id' => $request->prjpending,
                'status_pending' => $request->statpending,
                'deskripsi_pending' => $request->despending,
                'updated_at' => date('Y-m-d h:i:s')
            ]);
            return response()->json(['success' => 'Data updated successfully.']);
        }else if($request->metode=='inserttask'){
            $request->validate([
                'prjtask' => 'required',
            ]);
            TaskModel::insert([
                'project_id' => $request->prjtask,
                'urutan_task' => $request->urutantask,
                'nama_task' => $request->namatask,
                'tgldari_task' => $request->tgldari,
                'tglsmp_task' => $request->tglsmp,
                'progress' => $request->progresstask,
                'updated_at' => date('Y-m-d h:i:s'),
                'created_at' => date('Y-m-d h:i:s')
                ]);
            return response()->json(['success' => 'Data saved successfully.']);
        }else if($request->metode=='edittask'){
            $request->validate([
                'prjtask' => 'required',
            ]);
            TaskModel::where('id_task', '=', $request->id_task)->update([
                'project_id' => $request->prjtask,
                'urutan_task' => $request->urutantask,
                'nama_task' => $request->namatask,
                'tgldari_task' => $request->tgldari,
                'tglsmp_task' => $request->tglsmp,
                'progress' => $request->progresstask,
                'updated_at' => date('Y-m-d h:i:s'),
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
    public function deletepending(Request $request)
    {
        Prj_Pending::where('id_pending', '=', $request->id_pending)->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }
    public function delete_task(Request $request)
    {
        TaskModel::where('id_task', '=', $request->id_task)->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }

}
