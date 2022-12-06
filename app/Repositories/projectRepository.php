<?php

namespace App\Repositories;

use App\Models\project;
use App\Repositories\BaseRepository;

/**
 * Class projectRepository
 * @package App\Repositories
 * @version September 19, 2022, 6:45 am UTC
*/

class projectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'project_id',
        'local_project_id',
        'divisi',
        'departement',
        'sales_am',
        'client',
        'project',
        'project_fullname',
        'client_fullname',
        'jenis_project',
        'kontrak_no',
        'kontrak_tgl_mulai',
        'kontrak_tgl_selesai',
        'bamk_tgl',
        'nilai_kontrak_BT',
        'nilai_kontrak_AT',
        'rab_no',
        'rab_tgl_approved',
        'status',
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
        return project::class;
    }
}
