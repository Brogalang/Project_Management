<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class project
 * @package App\Models
 * @version September 19, 2022, 6:45 am UTC
 *
 * @property string $project_id
 * @property string $departement
 * @property string $sales_am
 * @property string $client
 * @property string $project
 * @property string $project_fullname
 * @property string $jenis_project
 * @property string $kontrak_no
 * @property string $kontrak_tgl_mulai
 * @property string $kontrak_tgl_selesai
 * @property string $bamk_tgl
 * @property string $nilai_kontrak_BT
 * @property string $nilai_kontrak_AT
 * @property string $rab_no
 * @property string $rab_tgl_approved
 * @property string $status
 * @property string $catatan
 */
class project extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'projects';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'project_id',
        'departement',
        'sales_am',
        'client',
        'project',
        'project_fullname',
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'project_id' => 'string',
        'departement' => 'string',
        'sales_am' => 'string',
        'client' => 'string',
        'project' => 'string',
        'project_fullname' => 'string',
        'jenis_project' => 'string',
        'kontrak_no' => 'string',
        'kontrak_tgl_mulai' => 'string',
        'kontrak_tgl_selesai' => 'string',
        'bamk_tgl' => 'string',
        'nilai_kontrak_BT' => 'string',
        'nilai_kontrak_AT' => 'string',
        'rab_no' => 'string',
        'rab_tgl_approved' => 'string',
        'status' => 'string',
        'catatan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
