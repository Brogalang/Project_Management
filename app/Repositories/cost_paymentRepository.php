<?php

namespace App\Repositories;

use App\Models\cost_payment;
use App\Repositories\BaseRepository;

/**
 * Class cost_paymentRepository
 * @package App\Repositories
 * @version October 26, 2022, 2:58 pm UTC
*/

class cost_paymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'payment_id',
        'invoice_id',
        'payment_date',
        'payment_value'
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
        return cost_payment::class;
    }
}
