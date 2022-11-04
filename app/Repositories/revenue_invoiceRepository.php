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
        'nomor_invoice',
        'tanggal_invoice',
        'nilai_invoice',
        'project_id',
        'keterangan',
        'termin',
        'periode'
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
