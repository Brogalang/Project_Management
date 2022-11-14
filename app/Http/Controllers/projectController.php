<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use App\Repositories\projectRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\project;
use Auth;
use Illuminate\Http\Request;
use Flash;
use Response;
use Str;

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
        $salesam = $request->amfind;
        $projects = project::where('project_id', 'like', "%" . $keyword . "%")
                            ->where('sales_am', 'like', "%" . $salesam . "%")
                            ->orderby('id','DESC')->get();
        return view('projects.index', compact('projects'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
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
        $auth=Auth::user()->Nama;
        $projects = project::orderby('id', 'DESC')
                            ->where('sales_am', 'like' , "%".$auth."%")
                            ->get();

        // return view('projects.index')
        //     ->with('projects', $projects);

        return view('projects.index',compact('projects'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
            
        // return view('form.kary',compact('data','menus','jab','dep'))
        // ->with('i', (request()->input('page', 1) - 1) * 5);
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
        $request->request->add(['project_id' => 'PRJ/' . Str::substr($request->departement, 0, 1) . '/' . date('Y-m'). '/' . rand(1000,9999)]);

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
