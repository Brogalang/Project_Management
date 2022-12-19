<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use App\Repositories\projectRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\project;
use App\Models\JabatanModel;
use App\Models\DivisiModel;
use App\Models\SubDivisiModel;
use Auth;
use Illuminate\Http\Request;
use Flash;
use Response;
use Str;
use DB;

class projectController extends AppBaseController
{
    /** @var  projectRepository */
    private $projectRepository;

    public function __construct(projectRepository $projectRepo)
    {
        $this->projectRepository = $projectRepo;
    }

    public function search(Request $request)
    {
        $keyword = $request->prjfind;
        $client = $request->clientfind;
        $salesam = $request->amfind;
        $departement = $request->depfind;
        $divisi = $request->divfind;
        $depopt = DB::select("select * from tb_subdivisi a 
                            left join tbldivmaster b on a.iddivisi=b.id
                            where b.nama_div_ext like '%Commercial%'
                            ");
        $amopt = DB::select("select distinct a.Nama from tb_datapribadi a 
                            left join tb_jabatan b on a.idjabatan=b.id
                            left join tbldivmaster c on a.Divisi=c.id
                            where b.jabatan like '%Account Manager%' and c.nama_div_ext like '%Commercial%'
                            ");
        $divopt=DivisiModel::where('nama_div_ext','like','%Commercial%')->get();

        if ($departement!='') {
            $projects = DB::select("select a.id as id,a.*,b.* from projects a 
                                left join tb_datapribadi b on a.sales_am like concat('%', b.Nama, '%')
                                left join tb_subdivisi c on b.SubDivisi=c.id
                                where c.subdivisi like '%".$departement."%' and a.project like '%".$keyword."%'
                                and a.sales_am like '%".$salesam."%'
                                and a.client like '%".$client."%'
                                and a.departement like '%".$divisi."%'
                                ");
        }else{
            $projects = project::where('project', 'like', "%" . $keyword . "%")
                                ->where('sales_am', 'like', "%" . $salesam . "%")
                                ->where('client', 'like', "%" . $client . "%")
                                ->where('departement', 'like', "%" . $divisi . "%")
                                ->orderby('id','DESC')->get();
        }
        $divuser=DivisiModel::where('id', '=', Auth::user()->Divisi)->first();
        if (strpos($divuser->nama_div_ext, "Commercial")!== false) {
            $disabled="";
        }else{
            $disabled="disabled";
        }
        
        // print_r($request->page);
        // die();
        return view('projects.index', compact('projects','keyword','salesam','client','departement','amopt','depopt','divisi','divopt','disabled'))
        ->with('i');
    }

    /**
     * Display a listing of the project.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $divopt=DivisiModel::where('nama_div_ext','like','%Commercial%')->get();

        $depopt = DB::select("select * from tb_subdivisi a 
                            left join tbldivmaster b on a.iddivisi=b.id
                            where b.nama_div_ext like '%Commercial%'
                            ");
        $amopt = DB::select("select distinct a.Nama from tb_datapribadi a 
                            left join tb_jabatan b on a.idjabatan=b.id
                            left join tbldivmaster c on a.Divisi=c.id
                            where b.jabatan like '%Account Manager%' and c.nama_div_ext like '%Commercial%'
                            ");
        function cekauthkar($jabatan){
            if (strpos($jabatan, "Account Manager")!== false) {
                $projects = project::orderby('id', 'DESC')
                            ->where('sales_am', 'like' , "%".Auth::user()->Nama."%")
                            ->get();
            }elseif (strpos($jabatan, "Kepala Divisi")!== false) {
                $projects = DB::select("select * from projects a
                                        left join tb_datapribadi b on a.sales_am like concat('%', b.Nama, '%')
                                        left join tbldivmaster c on b.Divisi=c.id
                                        where c.id ='".Auth::user()->Divisi."'
                                    ");
            }elseif (strpos($jabatan, "Kepala Departemen")!== false) {
                $projects = DB::select("select * from projects a
                                        left join tb_datapribadi b on a.sales_am like concat('%', b.Nama, '%')
                                        left join tb_subdivisi c on b.SubDivisi=c.id
                                        where c.id = '".Auth::user()->SubDivisi."'
                                    ");
            }else{
                $projects = project::orderby('id', 'DESC')
                            ->where('sales_am', 'like' , "%".Auth::user()->Nama."%")
                            ->get();
            }
            return $projects;
        }
        
        $userjab=Auth::user()->idjabatan;
        $subdivisi=JabatanModel::where('id', '=', $userjab)->first();
        $projects=cekauthkar($subdivisi->jabatan);

        $divuser=DivisiModel::where('id', '=', Auth::user()->Divisi)->first();

        if (strpos($divuser->nama_div_ext, "Commercial")!== false) {
            $disabled="";
        }else{
            $disabled="disabled";
        }

        // echo"<pre>";
        // print_r($subdivisi->jabatan);
        // echo"<pre>";
        // print_r($divuser->nama_div_ext);
        // echo"</pre>";
        // die();

        $keyword=null;
        $salesam=null;
        $client=null;
        $departement=null;
        $divisi=null;
        return view('projects.index',compact('projects','keyword','salesam','client','departement','amopt','depopt','divopt','divisi','disabled'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new project.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created project in storage.
     *
     * @param CreateprojectRequest $request
     *
     * @return Response
     */
    public function store(CreateprojectRequest $request)
    {
        if ($request->codedepartement == "GOV") {
            $codeDept="GOV";
        }elseif ($request->codedepartement == "BUMN") {
            $codeDept="BUN";
        }elseif ($request->codedepartement == "PRIV") {
            $codeDept="PRI";
        }else{
            $codeDept="PRJ";
        }
        $request->kontrak_tgl_mulai;
        $thn_mulai=substr($request->kontrak_tgl_mulai,2,2);
        $kode_prj=$codeDept.'/'.$thn_mulai.'/';
        $nmbr = project::orderby('project_id', 'DESC')
                            ->where('project_id', 'like' , "".$kode_prj."%")
                            ->first();
        if ($nmbr) {
            $counter=sprintf("%03d",substr($nmbr->project_id,-3,3)+1);
        }else{
            $counter="001";
        }
        
        // echo"<pre>";
        // print_r($nmbr);
        // echo"<pre>";
        // print_r($kode_prj.$counter);
        // die();
        $request->request->add(['project_id' => ''.$codeDept.'/' . $thn_mulai . '/' . $counter]);

        $input = $request->all();

        $project = $this->projectRepository->create($input);

        Flash::success('Project saved successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified project.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }

        return view('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified project.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }

        return view('projects.edit')->with('project', $project);
    }

    /**
     * Update the specified project in storage.
     *
     * @param int $id
     * @param UpdateprojectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprojectRequest $request)
    {
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }

        $project = $this->projectRepository->update($request->all(), $id);

        Flash::success('Project updated successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified project from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $project = $this->projectRepository->find($id);

        if (empty($project)) {
            Flash::error('Project not found');

            return redirect(route('projects.index'));
        }

        $this->projectRepository->delete($id);

        Flash::success('Project deleted successfully.');

        return redirect(route('projects.index'));
    }

    public function api_projects()
    {
        $projects = $this->projectRepository->all();
        $arr_projects = [];

        foreach ($projects as $project) {
            $arr_projects[] = $project->project_id . '<=>' . $project->project;
        }

        return $arr_projects;

    }
}
