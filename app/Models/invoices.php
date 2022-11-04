<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class invoices
 * @package App\Models
 * @version October 24, 2022, 1:44 am UTC
 *
 * @property integer $project_id
 * @property string $invoice_no
 * @property string $invoice_date
 * @property string $nama_pelanggan
 * @property string $jatuh_tempo
 * @property string $uraian_invoice
 * @property string $nilai_invoice_rupiah
 * @property string $nilai_invoice_usd
 * @property integer $ppn_rupiah
 * @property integer $ppn_usd
 * @property integer $bulan
 * @property string $data_valid
 * @property string $pic
 * @property string $tanggal_bayar
 * @property string $status
 * @property string $keterangan
 * @property string $tipe
 * @property string $bulan_bayar
 */
class invoices extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'invoices';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'project_id',
        'invoice_no',
        'invoice_date',
        'nama_pelanggan',
        'jatuh_tempo',
        'uraian_invoice',
        'nilai_invoice_rupiah',
        'nilai_invoice_usd',
        'ppn_rupiah',
        'ppn_usd',
        'bulan',
        'data_valid',
        'pic',
        'tanggal_bayar',
        'status',
        'keterangan',
        'tipe',
        'bulan_bayar',
        'nomor_po',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'project_id' => 'integer',
        'invoice_no' => 'string',
        'invoice_date' => 'string',
        'nama_pelanggan' => 'string',
        'jatuh_tempo' => 'string',
        'uraian_invoice' => 'string',
        'nilai_invoice_rupiah' => 'string',
        'nilai_invoice_usd' => 'string',
        'ppn_rupiah' => 'integer',
        'ppn_usd' => 'integer',
        'bulan' => 'integer',
        'data_valid' => 'string',
        'pic' => 'string',
        'tanggal_bayar' => 'string',
        'status' => 'string',
        'keterangan' => 'string',
        'tipe' => 'string',
        'bulan_bayar' => 'string',
        'nomor_po' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
