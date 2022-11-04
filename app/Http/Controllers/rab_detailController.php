<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createrab_detailRequest;
use App\Http\Requests\Updaterab_detailRequest;
use App\Repositories\rab_detailRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\RAB;
use App\Models\rab_detail;
use Illuminate\Http\Request;
use Flash;
use Response;

class rab_detailController extends AppBaseController
{
    /** @var  rab_detailRepository */
    private $rabDetailRepository;

    public function __construct(rab_detailRepository $rabDetailRepo)
    {
        $this->rabDetailRepository = $rabDetailRepo;
    }

    /**
     * Display a listing of the rab_detail.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rabDetails = $this->rabDetailRepository->all();

        return view('rab_details.index')
            ->with('rabDetails', $rabDetails);
    }

    /**
     * Show the form for creating a new rab_detail.
     *
     * @return Response
     */
    public function create()
    {
        return view('rab_details.create');
    }

    /**
     * Store a newly created rab_detail in storage.
     *
     * @param Createrab_detailRequest $request
     *
     * @return Response
     */
    public function store(Createrab_detailRequest $request)
    {
        $request->request->add([
            'rab_item_no' => rab_detail::where('rab_rec_id', $request->rab_rec_id)->count() + 1,
        ]);

        $input = $request->all();

        // $rabDetail = $this->rabDetailRepository->create($input);

        $rabDetail = rab_detail::updateOrCreate(
            [
                'id' => $request->rab_db_id,
                'rab_item_no' => $request->rab_item_no,
            ],
            [
                'rab_rec_id' => $request->rab_rec_id,
                'nama_barang_jasa' => $request->nama_barang_jasa,
                'hrg_satuan' => $request->hrg_satuan,
                'quantity' => $request->quantity,
                'frekuensi' => $request->frekuensi,
                'deskripsi' => $request->deskripsi,
                'catatan' => $request->catatan,
            ]
        );

        return $rabDetail;

        Flash::success('Rab Detail saved successfully.');

        return redirect(route('rabDetails.index'));
    }

    /**
     * Display the specified rab_detail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rabDetail = $this->rabDetailRepository->find($id);

        if (empty($rabDetail)) {
            Flash::error('Rab Detail not found');

            // return redirect(route('rabDetails.index'));
        }

        return $rabDetail;
        // return view('rab_details.show')->with('rabDetail', $rabDetail);
    }

    /**
     * Show the form for editing the specified rab_detail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rabDetail = $this->rabDetailRepository->find($id);

        if (empty($rabDetail)) {
            Flash::error('Rab Detail not found');

            return redirect(route('rabDetails.index'));
        }

        return view('rab_details.edit')->with('rabDetail', $rabDetail);
    }

    /**
     * Update the specified rab_detail in storage.
     *
     * @param int $id
     * @param Updaterab_detailRequest $request
     *
     * @return Response
     */
    public function update($id, Updaterab_detailRequest $request)
    {
        $rabDetail = $this->rabDetailRepository->find($id);

        if (empty($rabDetail)) {
            Flash::error('Rab Detail not found');

            return redirect(route('rabDetails.index'));
        }

        $rabDetail = $this->rabDetailRepository->update($request->all(), $id);

        Flash::success('Rab Detail updated successfully.');

        return redirect(route('rabDetails.index'));
    }

    /**
     * Remove the specified rab_detail from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rabDetail = $this->rabDetailRepository->find($id);

        if (empty($rabDetail)) {
            Flash::error('Rab Detail not found');

            return redirect(route('rabDetails.index'));
        }

        $this->rabDetailRepository->delete($id);

        Flash::success('Rab Detail deleted successfully.');

        return redirect(route('rabDetails.index'));
    }

    public function rabDetailsBiaya(Request $request)
    {
        $rab_rec_id = $request->rab_rec_id;

        $rab_detil_biaya = rab_detail::where('rab_rec_id', $rab_rec_id)->get();

        return view('rab_details.fields')->with('rab_detil_biaya', $rab_detil_biaya);
    }
}
