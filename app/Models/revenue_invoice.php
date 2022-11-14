<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class revenue_invoice
 * @package App\Models
 * @version October 26, 2022, 3:01 pm UTC
 *
 * @property string $nomor_invoice
 * @property string $tanggal_invoice
 * @property string $nilai_invoice
 * @property integer $project_id
 * @property string $keterangan
 * @property string $termin
 * @property string $periode
 */
class revenue_invoice extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'revenue_invoices';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'no_invoice',
        'gl_invoice',
        'id_customer',
        'id_project',
        'tgl_jatuh_tempo',
        'uraian_invoice',
        'nilai_rp',
        'nilai_usd',
        'ppn_rp',
        'ppn_usd',
        'kd_dep',
        'kd_div',
        'bln',
        'data_valid',
        'pic',
        'ar_age',
        'tgl_bayar',
        'status',
        'keterangan',
        'tipe',
        'bln_byr',
        'termin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'no_invoice'        => 'string',
        'gl_invoice'        => 'string',
        'id_customer'       => 'string',
        'id_project'        => 'string',
        'tgl_jatuh_tempo'   => 'string',
        'uraian_invoice'    => 'string',
        'nilai_rp'          => 'double',
        'nilai_usd'         => 'double',
        'ppn_rp'            => 'double',
        'ppn_usd'           => 'double',
        'kd_dep'            => 'string',
        'kd_div'            => 'string',
        'bln'               => 'integer',
        'data_valid'        => 'string',
        'pic'               => 'string',
        'ar_age'            => 'string',
        'tgl_bayar'         => 'string',
        'status'            => 'string',
        'keterangan'        => 'string',
        'tipe'              => 'string',
        'bln_byr'           => 'integer',
        'termin'            => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
