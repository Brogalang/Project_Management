<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class rab_sub_details
 * @package App\Models
 * @version October 6, 2022, 3:26 am UTC
 *
 * @property integer $rab_dtl_rec_id
 * @property string $nama_barang_jasa
 * @property integer $hrg_satuan
 * @property integer $quantity
 * @property integer $frekuensi
 * @property string $deskripsi
 * @property string $catatan
 */
class rab_sub_details extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'rab_sub_details';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'rab_dtl_rec_id',
        'nama_barang_jasa',
        'hrg_satuan',
        'quantity',
        'frekuensi',
        'deskripsi',
        'catatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rab_dtl_rec_id' => 'integer',
        'nama_barang_jasa' => 'string',
        'hrg_satuan' => 'integer',
        'quantity' => 'integer',
        'frekuensi' => 'integer',
        'deskripsi' => 'string',
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
