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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        $jab = M_jabatan::all();
        $div = M_divisi::distinct()->get(['id_divisi','nama_divisi']);
        $dep = M_divisi::all();
        return view('form.karycreate',compact('menus','jab','div','dep'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $menus = Menu::where('parent_id', '=', 0)->get();
        return view('datakaryawan.show',compact('product','menus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($nik)
    {
        print_r($nik);
        // $kary = M_karyawan::where('nik', '=', $nik)->get();
        // $jab = M_jabatan::all();
        // $dep = M_divisi::all();
        // $menus = Menu::where('parent_id', '=', 0)->get();
        // return view('form.karyedit',compact('kary','menus','jab','dep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function destroy($id_jabatan)
    {
        M_jabatan::where('id_jabatan', '=', $id_jabatan)->delete();
        return redirect()->route('jabatan.index')
                        ->with('success','Product deleted successfully');
    }
}
