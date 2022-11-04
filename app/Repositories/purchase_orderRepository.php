<?php

namespace App\Repositories;

use App\Models\purchase_order;
use App\Repositories\BaseRepository;

/**
 * Class purchase_orderRepository
 * @package App\Repositories
 * @version October 26, 2022, 2:55 pm UTC
*/

class purchase_orderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomor_po',
        'tanggal_po',
        'rab_id',
        'project_id',
        'kategori',
        'nama_barang_jasa',
        'nilai_barang_jasa',
        'no_item_rab',
        'np_sub_item_rab'
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
        return purchase_order::class;
    }
}
