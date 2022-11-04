<?php

namespace App\Repositories;

use App\Models\invoices;
use App\Repositories\BaseRepository;

/**
 * Class invoicesRepository
 * @package App\Repositories
 * @version October 24, 2022, 1:44 am UTC
*/

class invoicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'project_id',
        'invoice_no',
        'invoice_date',
        'nama_pelanggan',
        'jatuh_tempo',
        'uraian_invoice',
        'nilai_invoice_rupiah',
        'nilai_invoice_usd',
        'ppn_rupiah',
        'ppn_usd',
        'bulan',
        'data_valid',
        'pic',
        'tanggal_bayar',
        'status',
        'keterangan',
        'tipe',
        'bulan_bayar',
        'nomor_po',
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
        return invoices::class;
    }
}
