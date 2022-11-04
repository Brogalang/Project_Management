<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class purchase_order
 * @package App\Models
 * @version October 26, 2022, 2:55 pm UTC
 *
 * @property string $nomor_po
 * @property string $tanggal_po
 * @property integer $rab_id
 * @property integer $project_id
 * @property string $kategori
 * @property string $nama_barang_jasa
 * @property string $nilai_barang_jasa
 * @property string $no_item_rab
 * @property string $np_sub_item_rab
 */
class purchase_order extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'purchase_orders';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nomor_po',
        'tanggal_po',
        'rab_id',
        'project_id',
        'kategori',
        'nama_barang_jasa',
        'nilai_barang_jasa',
        'no_item_rab',
        'np_sub_item_rab'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nomor_po' => 'string',
        'tanggal_po' => 'string',
        'rab_id' => 'integer',
        'project_id' => 'integer',
        'kategori' => 'string',
        'nama_barang_jasa' => 'string',
        'nilai_barang_jasa' => 'string',
        'no_item_rab' => 'string',
        'np_sub_item_rab' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
