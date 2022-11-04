<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createcost_paymentRequest;
use App\Http\Requests\Updatecost_paymentRequest;
use App\Repositories\cost_paymentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class cost_paymentController extends AppBaseController
{
    /** @var cost_paymentRepository $costPaymentRepository*/
    private $costPaymentRepository;

    public function __construct(cost_paymentRepository $costPaymentRepo)
    {
        $this->costPaymentRepository = $costPaymentRepo;
    }

    /**
     * Display a listing of the cost_payment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $costPayments = $this->costPaymentRepository->all();

        return view('cost_payments.index')
            ->with('costPayments', $costPayments);
    }

    /**
     * Show the form for creating a new cost_payment.
     *
     * @return Response
     */
    public function create()
    {
        return view('cost_payments.create');
    }

    /**
     * Store a newly created cost_payment in storage.
     *
     * @param Createcost_paymentRequest $request
     *
     * @return Response
     */
    public function store(Createcost_paymentRequest $request)
    {
        $input = $request->all();

        $costPayment = $this->costPaymentRepository->create($input);

        Flash::success('Cost Payment saved successfully.');

        return redirect(route('costPayments.index'));
    }

    /**
     * Display the specified cost_payment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $costPayment = $this->costPaymentRepository->find($id);

        if (empty($costPayment)) {
            Flash::error('Cost Payment not found');

            return redirect(route('costPayments.index'));
        }

        return view('cost_payments.show')->with('costPayment', $costPayment);
    }

    /**
     * Show the form for editing the specified cost_payment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $costPayment = $this->costPaymentRepository->find($id);

        if (empty($costPayment)) {
            Flash::error('Cost Payment not found');

            return redirect(route('costPayments.index'));
        }

        return view('cost_payments.edit')->with('costPayment', $costPayment);
    }

    /**
     * Update the specified cost_payment in storage.
     *
     * @param int $id
     * @param Updatecost_paymentRequest $request
     *
     * @return Response
     */
    public function update($id, Updatecost_paymentRequest $request)
    {
        $costPayment = $this->costPaymentRepository->find($id);

        if (empty($costPayment)) {
            Flash::error('Cost Payment not found');

            return redirect(route('costPayments.index'));
        }

        $costPayment = $this->costPaymentRepository->update($request->all(), $id);

        Flash::success('Cost Payment updated successfully.');

        return redirect(route('costPayments.index'));
    }

    /**
     * Remove the specified cost_payment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $costPayment = $this->costPaymentRepository->find($id);

        if (empty($costPayment)) {
            Flash::error('Cost Payment not found');

            return redirect(route('costPayments.index'));
        }

        $this->costPaymentRepository->delete($id);

        Flash::success('Cost Payment deleted successfully.');

        return redirect(route('costPayments.index'));
    }
}
