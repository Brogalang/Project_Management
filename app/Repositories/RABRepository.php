<?php

namespace App\Repositories;

use App\Models\RAB;
use App\Repositories\BaseRepository;

/**
 * Class RABRepository
 * @package App\Repositories
 * @version September 19, 2022, 7:56 am UTC
*/

class RABRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rab_no',
        'rab_tgl_ttd',
        'rab_tgl_awal',
        'rab_tgl_akhir',
        'catatan',
        'project_rec_id',
        'project_name'
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
        return RAB::class;
    }
}
