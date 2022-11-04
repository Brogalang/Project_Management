<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createrevenue_paymentRequest;
use App\Http\Requests\Updaterevenue_paymentRequest;
use App\Repositories\revenue_paymentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class revenue_paymentController extends AppBaseController
{
    /** @var revenue_paymentRepository $revenuePaymentRepository*/
    private $revenuePaymentRepository;

    public function __construct(revenue_paymentRepository $revenuePaymentRepo)
    {
        $this->revenuePaymentRepository = $revenuePaymentRepo;
    }

    /**
     * Display a listing of the revenue_payment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $revenuePayments = $this->revenuePaymentRepository->all();

        return view('revenue_payments.index')
            ->with('revenuePayments', $revenuePayments);
    }

    /**
     * Show the form for creating a new revenue_payment.
     *
     * @return Response
     */
    public function create()
    {
        return view('revenue_payments.create');
    }

    /**
     * Store a newly created revenue_payment in storage.
     *
     * @param Createrevenue_paymentRequest $request
     *
     * @return Response
     */
    public function store(Createrevenue_paymentRequest $request)
    {
        $input = $request->all();

        $revenuePayment = $this->revenuePaymentRepository->create($input);

        Flash::success('Revenue Payment saved successfully.');

        return redirect(route('revenuePayments.index'));
    }

    /**
     * Display the specified revenue_payment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $revenuePayment = $this->revenuePaymentRepository->find($id);

        if (empty($revenuePayment)) {
            Flash::error('Revenue Payment not found');

            return redirect(route('revenuePayments.index'));
        }

        return view('revenue_payments.show')->with('revenuePayment', $revenuePayment);
    }

    /**
     * Show the form for editing the specified revenue_payment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $revenuePayment = $this->revenuePaymentRepository->find($id);

        if (empty($revenuePayment)) {
            Flash::error('Revenue Payment not found');

            return redirect(route('revenuePayments.index'));
        }

        return view('revenue_payments.edit')->with('revenuePayment', $revenuePayment);
    }

    /**
     * Update the specified revenue_payment in storage.
     *
     * @param int $id
     * @param Updaterevenue_paymentRequest $request
     *
     * @return Response
     */
    public function update($id, Updaterevenue_paymentRequest $request)
    {
        $revenuePayment = $this->revenuePaymentRepository->find($id);

        if (empty($revenuePayment)) {
            Flash::error('Revenue Payment not found');

            return redirect(route('revenuePayments.index'));
        }

        $revenuePayment = $this->revenuePaymentRepository->update($request->all(), $id);

        Flash::success('Revenue Payment updated successfully.');

        return redirect(route('revenuePayments.index'));
    }

    /**
     * Remove the specified revenue_payment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $revenuePayment = $this->revenuePaymentRepository->find($id);

        if (empty($revenuePayment)) {
            Flash::error('Revenue Payment not found');

            return redirect(route('revenuePayments.index'));
        }

        $this->revenuePaymentRepository->delete($id);

        Flash::success('Revenue Payment deleted successfully.');

        return redirect(route('revenuePayments.index'));
    }
}
