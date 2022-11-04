<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateinvoicesRequest;
use App\Http\Requests\UpdateinvoicesRequest;
use App\Repositories\invoicesRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\invoices;
use App\Models\project;
use App\Models\purchase_order;
use Illuminate\Http\Request;
use Flash;
use Response;

class invoicesController extends AppBaseController
{
    /** @var invoicesRepository $invoicesRepository*/
    private $invoicesRepository;

    public function __construct(invoicesRepository $invoicesRepo)
    {
        $this->invoicesRepository = $invoicesRepo;
    }

    /**
     * Display a listing of the invoices.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $invoices = $this->invoicesRepository->all();
        $invoices = invoices::select('invoices.*', 'projects.project_id as proid', 'projects.project', 'purchase_orders.nomor_po as po_number', 'purchase_orders.tanggal_po')
            ->leftjoin('projects', 'invoices.project_id', '=', 'projects.id')
            ->leftjoin('purchase_orders', 'invoices.nomor_po', '=', 'purchase_orders.id')
            ->get();

        return view('invoices.index')
            ->with('invoices', $invoices);
    }

    /**
     * Show the form for creating a new invoices.
     *
     * @return Response
     */
    public function create()
    {
        $projects = project::get();
        $nomor_po = purchase_order::get();
        return view('invoices.create')->with('projects', $projects)->with('nomor_po', $nomor_po)->with('invoices', null);
    }

    /**
     * Store a newly created invoices in storage.
     *
     * @param CreateinvoicesRequest $request
     *
     * @return Response
     */
    public function store(CreateinvoicesRequest $request)
    {
        $input = $request->all();

        $invoices = $this->invoicesRepository->create($input);

        Flash::success('Invoices saved successfully.');

        return redirect(route('invoices.index'));
    }

    /**
     * Display the specified invoices.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        // $invoices = $this->invoicesRepository->find($id);
        $invoices = invoices::select('invoices.*', 'projects.project_id as proid', 'projects.project', 'purchase_orders.nomor_po as po_number', 'purchase_orders.tanggal_po')
            ->leftjoin('projects', 'invoices.project_id', '=', 'projects.id')
            ->leftjoin('purchase_orders', 'invoices.nomor_po', '=', 'purchase_orders.id')
            ->where('invoices.id', $id)
            ->first();

        if (empty($invoices)) {
            Flash::error('Invoices not found');

            return redirect(route('invoices.index'));
        }

        return view('invoices.show')->with('invoices', $invoices);
    }

    /**
     * Show the form for editing the specified invoices.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoices = $this->invoicesRepository->find($id);
        $projects = project::get();
        $nomor_po = purchase_order::get();

        if (empty($invoices)) {
            Flash::error('Invoices not found');

            return redirect(route('invoices.index'));
        }

        return view('invoices.edit')->with('invoices', $invoices)->with('nomor_po', $nomor_po)->with('projects', $projects);
    }

    /**
     * Update the specified invoices in storage.
     *
     * @param int $id
     * @param UpdateinvoicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateinvoicesRequest $request)
    {
        $invoices = $this->invoicesRepository->find($id);

        if (empty($invoices)) {
            Flash::error('Invoices not found --');

            return redirect(route('invoices.index'));
        }

        $invoices = $this->invoicesRepository->update($request->all(), $id);

        Flash::success('Invoices updated successfully.');

        return redirect(route('invoices.index'));
    }

    /**
     * Remove the specified invoices from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoices = $this->invoicesRepository->find($id);

        if (empty($invoices)) {
            Flash::error('Invoices not found');

            return redirect(route('invoices.index'));
        }

        $this->invoicesRepository->delete($id);

        Flash::success('Invoices deleted successfully.');

        return redirect(route('invoices.index'));
    }
}
