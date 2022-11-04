<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class RAB
 * @package App\Models
 * @version September 19, 2022, 7:56 am UTC
 *
 * @property string $rab_no
 * @property string $rab_tgl_ttd
 * @property string $rab_tgl_awal
 * @property string $rab_tgl_akhir
 * @property string $catatan
 * @property integer $project_rec_id
 * @property string $project_name
 */
class RAB extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'r_a_b_s';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'rab_no',
        'rab_tgl_ttd',
        'rab_tgl_awal',
        'rab_tgl_akhir',
        'catatan',
        'project_rec_id',
        'project_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rab_no' => 'string',
        'rab_tgl_ttd' => 'string',
        'rab_tgl_awal' => 'string',
        'rab_tgl_akhir' => 'string',
        'catatan' => 'string',
        'project_rec_id' => 'integer',
        'project_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
