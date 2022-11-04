<?php

namespace App\Repositories;

use App\Models\revenue_payment;
use App\Repositories\BaseRepository;

/**
 * Class revenue_paymentRepository
 * @package App\Repositories
 * @version October 26, 2022, 3:02 pm UTC
*/

class revenue_paymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'payment_id',
        'payment_date',
        'payment_value',
        'invoice_id'
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
        return revenue_payment::class;
    }
}
