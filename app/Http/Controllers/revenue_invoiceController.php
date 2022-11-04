<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createrevenue_invoiceRequest;
use App\Http\Requests\Updaterevenue_invoiceRequest;
use App\Repositories\revenue_invoiceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class revenue_invoiceController extends AppBaseController
{
    /** @var revenue_invoiceRepository $revenueInvoiceRepository*/
    private $revenueInvoiceRepository;

    public function __construct(revenue_invoiceRepository $revenueInvoiceRepo)
    {
        $this->revenueInvoiceRepository = $revenueInvoiceRepo;
    }

    /**
     * Display a listing of the revenue_invoice.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $revenueInvoices = $this->revenueInvoiceRepository->all();

        return view('revenue_invoices.index')
            ->with('revenueInvoices', $revenueInvoices);
    }

    /**
     * Show the form for creating a new revenue_invoice.
     *
     * @return Response
     */
    public function create()
    {
        return view('revenue_invoices.create');
    }

    /**
     * Store a newly created revenue_invoice in storage.
     *
     * @param Createrevenue_invoiceRequest $request
     *
     * @return Response
     */
    public function store(Createrevenue_invoiceRequest $request)
    {
        $input = $request->all();

        $revenueInvoice = $this->revenueInvoiceRepository->create($input);

        Flash::success('Revenue Invoice saved successfully.');

        return redirect(route('revenueInvoices.index'));
    }

    /**
     * Display the specified revenue_invoice.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $revenueInvoice = $this->revenueInvoiceRepository->find($id);

        if (empty($revenueInvoice)) {
            Flash::error('Revenue Invoice not found');

            return redirect(route('revenueInvoices.index'));
        }

        return view('revenue_invoices.show')->with('revenueInvoice', $revenueInvoice);
    }

    /**
     * Show the form for editing the specified revenue_invoice.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $revenueInvoice = $this->revenueInvoiceRepository->find($id);

        if (empty($revenueInvoice)) {
            Flash::error('Revenue Invoice not found');

            return redirect(route('revenueInvoices.index'));
        }

        return view('revenue_invoices.edit')->with('revenueInvoice', $revenueInvoice);
    }

    /**
     * Update the specified revenue_invoice in storage.
     *
     * @param int $id
     * @param Updaterevenue_invoiceRequest $request
     *
     * @return Response
     */
    public function update($id, Updaterevenue_invoiceRequest $request)
    {
        $revenueInvoice = $this->revenueInvoiceRepository->find($id);

        if (empty($revenueInvoice)) {
            Flash::error('Revenue Invoice not found');

            return redirect(route('revenueInvoices.index'));
        }

        $revenueInvoice = $this->revenueInvoiceRepository->update($request->all(), $id);

        Flash::success('Revenue Invoice updated successfully.');

        return redirect(route('revenueInvoices.index'));
    }

    /**
     * Remove the specified revenue_invoice from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $revenueInvoice = $this->revenueInvoiceRepository->find($id);

        if (empty($revenueInvoice)) {
            Flash::error('Revenue Invoice not found');

            return redirect(route('revenueInvoices.index'));
        }

        $this->revenueInvoiceRepository->delete($id);

        Flash::success('Revenue Invoice deleted successfully.');

        return redirect(route('revenueInvoices.index'));
    }
}
