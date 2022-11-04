<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createpurchase_orderRequest;
use App\Http\Requests\Updatepurchase_orderRequest;
use App\Repositories\purchase_orderRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\project;
use Illuminate\Http\Request;
use Flash;
use Response;

class purchase_orderController extends AppBaseController
{
    /** @var purchase_orderRepository $purchaseOrderRepository*/
    private $purchaseOrderRepository;

    public function __construct(purchase_orderRepository $purchaseOrderRepo)
    {
        $this->purchaseOrderRepository = $purchaseOrderRepo;
    }

    /**
     * Display a listing of the purchase_order.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $purchaseOrders = $this->purchaseOrderRepository->all();

        return view('purchase_orders.index')
            ->with('purchaseOrders', $purchaseOrders);
    }

    /**
     * Show the form for creating a new purchase_order.
     *
     * @return Response
     */
    public function create()
    {
        $projects = project::get();
        return view('purchase_orders.create')->with('projects', $projects)->with('po', null);
    }

    /**
     * Store a newly created purchase_order in storage.
     *
     * @param Createpurchase_orderRequest $request
     *
     * @return Response
     */
    public function store(Createpurchase_orderRequest $request)
    {
        $input = $request->all();

        $purchaseOrder = $this->purchaseOrderRepository->create($input);

        Flash::success('Purchase Order saved successfully.');

        return redirect(route('purchaseOrders.index'));
    }

    /**
     * Display the specified purchase_order.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $purchaseOrder = $this->purchaseOrderRepository->find($id);

        if (empty($purchaseOrder)) {
            Flash::error('Purchase Order not found');

            return redirect(route('purchaseOrders.index'));
        }

        return view('purchase_orders.show')->with('purchaseOrder', $purchaseOrder);
    }

    /**
     * Show the form for editing the specified purchase_order.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $purchaseOrder = $this->purchaseOrderRepository->find($id);

        if (empty($purchaseOrder)) {
            Flash::error('Purchase Order not found');

            return redirect(route('purchaseOrders.index'));
        }

        return view('purchase_orders.edit')->with('purchaseOrder', $purchaseOrder);
    }

    /**
     * Update the specified purchase_order in storage.
     *
     * @param int $id
     * @param Updatepurchase_orderRequest $request
     *
     * @return Response
     */
    public function update($id, Updatepurchase_orderRequest $request)
    {
        $purchaseOrder = $this->purchaseOrderRepository->find($id);

        if (empty($purchaseOrder)) {
            Flash::error('Purchase Order not found');

            return redirect(route('purchaseOrders.index'));
        }

        $purchaseOrder = $this->purchaseOrderRepository->update($request->all(), $id);

        Flash::success('Purchase Order updated successfully.');

        return redirect(route('purchaseOrders.index'));
    }

    /**
     * Remove the specified purchase_order from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $purchaseOrder = $this->purchaseOrderRepository->find($id);

        if (empty($purchaseOrder)) {
            Flash::error('Purchase Order not found');

            return redirect(route('purchaseOrders.index'));
        }

        $this->purchaseOrderRepository->delete($id);

        Flash::success('Purchase Order deleted successfully.');

        return redirect(route('purchaseOrders.index'));
    }
}
