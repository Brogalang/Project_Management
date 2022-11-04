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
        'nomor_invoice',
        'tanggal_invoice',
        'nilai_invoice',
        'project_id',
        'keterangan',
        'termin',
        'periode'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nomor_invoice' => 'string',
        'tanggal_invoice' => 'string',
        'nilai_invoice' => 'string',
        'project_id' => 'integer',
        'keterangan' => 'string',
        'termin' => 'string',
        'periode' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
