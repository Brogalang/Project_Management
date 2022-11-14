<?php

namespace App\Repositories;

use App\Models\revenue_invoice;
use App\Repositories\BaseRepository;

/**
 * Class revenue_invoiceRepository
 * @package App\Repositories
 * @version October 26, 2022, 3:01 pm UTC
*/

class revenue_invoiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'no_invoice',
        'gl_invoice',
        'id_customer',
        'id_project',
        'tgl_jatuh_tempo',
        'uraian_invoice',
        'nilai_rp',
        'nilai_usd',
        'ppn_rp',
        'ppn_usd',
        'kd_dep',
        'kd_div',
        'bln',
        'data_valid',
        'pic',
        'ar_age',
        'tgl_bayar',
        'status',
        'keterangan',
        'tipe',
        'bln_byr',
        'termin'
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
        return revenue_invoice::class;
    }
}
