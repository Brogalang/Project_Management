<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class rab_detail
 * @package App\Models
 * @version September 21, 2022, 3:08 am UTC
 *
 * @property integer $rab_rec_id
 * @property string $rab_no
 * @property integer $rab_item_no
 * @property string $nama_barang_jasa
 * @property integer $hrg_satuan
 * @property integer $quantity
 * @property integer $frekuensi
 * @property string $deskripsi
 * @property string $catatan
 */
class rab_detail extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'rab_details';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'rab_rec_id',
        'rab_no',
        'rab_item_no',
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
        'rab_rec_id' => 'integer',
        'rab_no' => 'string',
        'rab_item_no' => 'integer',
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
