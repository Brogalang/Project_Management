<?php

namespace App\Repositories;

use App\Models\rab_detail;
use App\Repositories\BaseRepository;

/**
 * Class rab_detailRepository
 * @package App\Repositories
 * @version September 21, 2022, 3:08 am UTC
*/

class rab_detailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rab_rec_id',
        'rab_no',
        'rab_item_no',
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
        return rab_detail::class;
    }
}
