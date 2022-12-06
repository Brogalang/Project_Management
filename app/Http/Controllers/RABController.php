<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRABRequest;
use App\Http\Requests\UpdateRABRequest;
use App\Repositories\RABRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\project;
use App\Models\RAB;
use App\Models\rab_detail;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class RABController extends AppBaseController
{
    /** @var  RABRepository */
    private $rABRepository;

    public function __construct(RABRepository $rABRepo)
    {
        $this->rABRepository = $rABRepo;
    }

    /**
     * Display a listing of the RAB.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $rABS = $this->rABRepository->all();
        if ($request->id_show) {
            $rABS = RAB::where('project_rec_id', '=', $request->id_show)
                ->get();
            $id_show=$request->id_show;
        }else {
            $rABS = $this->rABRepository->all();
            $id_show="";
        }

        return view('r_a_b_s.index',compact('id_show'))
            ->with('rABS', $rABS);
    }

    /**
     * Show the form for creating a new RAB.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        if ($request->id_show) {
            $id_show=$request->id_show;
        }else {
            $id_show="";
        }
        $user_div = Auth::user()->divisi->nama_div_ext;
        $projects = project::get();

        return view('r_a_b_s.create',compact('id_show'))->with('projects', $projects);
    }

    /**
     * Store a newly created RAB in storage.
     *
     * @param CreateRABRequest $request
     *
     * @return Response
     */
    public function store(CreateRABRequest $request)
    {
        $project = $request['project_rec_id'];
        // list($project_rec_id, $project_name) = explode("<=>", $project);

        $request->request->add([
            // 'project_rec_id' => project::where('project_id', $project_rec_id)->value('id'),
            'project_rec_id' => $project,
            'project_name' => project::where('id', $project)->value('project'),
        ]);

        $input = $request->all();

        $rAB = $this->rABRepository->create($input);

        Flash::success('RAB saved successfully.');

        return redirect(route('rABS.index'));
    }

    /**
     * Display the specified RAB.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rAB = $this->rABRepository->find($id);
        $rab_detil_biaya = rab_detail::where('rab_rec_id', $id)->get();
        $projects = project::get();

        if (empty($rAB)) {
            Flash::error('RAB not found');

            return redirect(route('rABS.index'));
        }

        return view('r_a_b_s.show')->with('rAB', $rAB)->with('rab_detil_biaya', $rab_detil_biaya)->with('projects', $projects);
    }

    /**
     * Show the form for editing the specified RAB.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rAB = $this->rABRepository->find($id);
        $projects = project::get();

        if (empty($rAB)) {
            Flash::error('RAB not found');

            return redirect(route('rABS.index'));
        }

        return view('r_a_b_s.edit')->with('rAB', $rAB)->with('projects', $projects);
    }

    /**
     * Update the specified RAB in storage.
     *
     * @param int $id
     * @param UpdateRABRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRABRequest $request)
    {
        $rAB = $this->rABRepository->find($id);

        if (empty($rAB)) {
            Flash::error('RAB not found');

            return redirect(route('rABS.index'));
        }

        $rAB = $this->rABRepository->update($request->all(), $id);

        Flash::success('RAB updated successfully.');

        return redirect(route('rABS.index'));
    }

    /**
     * Remove the specified RAB from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rAB = $this->rABRepository->find($id);

        if (empty($rAB)) {
            Flash::error('RAB not found');

            return redirect(route('rABS.index'));
        }

        $this->rABRepository->delete($id);

        Flash::success('RAB deleted successfully.');

        return redirect(route('rABS.index'));
    }
}
