<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createrab_sub_detailsRequest;
use App\Http\Requests\Updaterab_sub_detailsRequest;
use App\Repositories\rab_sub_detailsRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\rab_sub_details;
use Illuminate\Http\Request;
use Flash;
use Response;

class rab_sub_detailsController extends AppBaseController
{
    /** @var  rab_sub_detailsRepository */
    private $rabSubDetailsRepository;

    public function __construct(rab_sub_detailsRepository $rabSubDetailsRepo)
    {
        $this->rabSubDetailsRepository = $rabSubDetailsRepo;
    }

    /**
     * Display a listing of the rab_sub_details.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rabSubDetails = $this->rabSubDetailsRepository->all();

        return view('rab_sub_details.index')
            ->with('rabSubDetails', $rabSubDetails);
    }

    /**
     * Show the form for creating a new rab_sub_details.
     *
     * @return Response
     */
    public function create()
    {
        return view('rab_sub_details.create');
    }

    /**
     * Store a newly created rab_sub_details in storage.
     *
     * @param Createrab_sub_detailsRequest $request
     *
     * @return Response
     */
    public function store(Createrab_sub_detailsRequest $request)
    {
        $input = $request->all();

        // $rabSubDetails = $this->rabSubDetailsRepository->create($input);

        $rabSubDetails = rab_sub_details::updateOrCreate(
            [
                'id' => $request->rab_sub_dtl_rec_id,
            ],
            [
                'rab_dtl_rec_id' => $request->rab_dtl_rec_id,
                'nama_barang_jasa' => $request->sub_nama_barang_jasa,
                'hrg_satuan' => $request->sub_hrg_satuan,
                'quantity' => $request->sub_quantity,
                'frekuensi' => $request->sub_frekuensi,
                'deskripsi' => $request->sub_deskripsi,
                'catatan' => $request->sub_catatan,
            ]
        );

        return $rabSubDetails;

        Flash::success('Rab Sub Details saved successfully.');

        return redirect(route('rabSubDetails.index'));
    }

    /**
     * Display the specified rab_sub_details.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rabSubDetails = $this->rabSubDetailsRepository->find($id);

        if (empty($rabSubDetails)) {
            Flash::error('Rab Sub Details not found');

            return redirect(route('rabSubDetails.index'));
        }

        return view('rab_sub_details.show')->with('rabSubDetails', $rabSubDetails);
    }

    /**
     * Show the form for editing the specified rab_sub_details.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rabSubDetails = $this->rabSubDetailsRepository->find($id);

        if (empty($rabSubDetails)) {
            Flash::error('Rab Sub Details not found');

            return redirect(route('rabSubDetails.index'));
        }

        return view('rab_sub_details.edit')->with('rabSubDetails', $rabSubDetails);
    }

    /**
     * Update the specified rab_sub_details in storage.
     *
     * @param int $id
     * @param Updaterab_sub_detailsRequest $request
     *
     * @return Response
     */
    public function update($id, Updaterab_sub_detailsRequest $request)
    {
        $rabSubDetails = $this->rabSubDetailsRepository->find($id);

        if (empty($rabSubDetails)) {
            Flash::error('Rab Sub Details not found');

            return redirect(route('rabSubDetails.index'));
        }

        $rabSubDetails = $this->rabSubDetailsRepository->update($request->all(), $id);

        Flash::success('Rab Sub Details updated successfully.');

        return redirect(route('rabSubDetails.index'));
    }

    /**
     * Remove the specified rab_sub_details from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rabSubDetails = $this->rabSubDetailsRepository->find($id);

        if (empty($rabSubDetails)) {
            Flash::error('Rab Sub Details not found');

            return redirect(route('rabSubDetails.index'));
        }

        $this->rabSubDetailsRepository->delete($id);

        Flash::success('Rab Sub Details deleted successfully.');

        return redirect(route('rabSubDetails.index'));
    }

    public function rabSubDetailsShowByRabDtl($id)
    {
        $rabSubDetails = rab_sub_details::where('rab_dtl_rec_id', $id)->get();

        return view('rab_sub_details.fields_sub_details')
            ->with('rabSubDetails', $rabSubDetails);
    }
}
