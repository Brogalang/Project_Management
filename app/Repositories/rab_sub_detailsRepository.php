<?php

namespace App\Repositories;

use App\Models\rab_sub_details;
use App\Repositories\BaseRepository;

/**
 * Class rab_sub_detailsRepository
 * @package App\Repositories
 * @version October 6, 2022, 3:26 am UTC
*/

class rab_sub_detailsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rab_dtl_rec_id',
        'nama_barang_jasa',
        'hrg_satuan',
        'quantity',
        'frekuensi',
        'deskripsi',
        'catatan'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return rab_sub_details::class;
    }
}
