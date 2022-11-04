<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class clients
 * @package App\Models
 * @version October 26, 2022, 7:39 am UTC
 *
 * @property string $client_id
 * @property string $bidang_usaha
 * @property string $npwp
 * @property string $nama_perusahaan
 * @property string $alamat_1
 * @property string $alamat_2
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $kota
 * @property string $provinsi
 * @property string $no_kontak_billing
 * @property string $email_billing
 * @property string $website_billing
 * @property string $pic_billing
 * @property string $jabatan_billing
 * @property string $no_telepon
 * @property string $mobile
 * @property string $email
 * @property string $nama_pic
 * @property string $jabatan
 * @property string $status_pelanggan
 * @property string $product_layanan
 * @property string $hasil_produksi
 * @property string $potensi_penjualan
 * @property string $valid
 */
class clients extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'clients';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'client_id',
        'bidang_usaha',
        'npwp',
        'nama_perusahaan',
        'alamat_1',
        'alamat_2',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'no_kontak_billing',
        'email_billing',
        'website_billing',
        'pic_billing',
        'jabatan_billing',
        'no_telepon',
        'mobile',
        'email',
        'nama_pic',
        'jabatan',
        'status_pelanggan',
        'product_layanan',
        'hasil_produksi',
        'potensi_penjualan',
        'valid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'client_id' => 'string',
        'bidang_usaha' => 'string',
        'npwp' => 'string',
        'nama_perusahaan' => 'string',
        'alamat_1' => 'string',
        'alamat_2' => 'string',
        'kelurahan' => 'string',
        'kecamatan' => 'string',
        'kota' => 'string',
        'provinsi' => 'string',
        'no_kontak_billing' => 'string',
        'email_billing' => 'string',
        'website_billing' => 'string',
        'pic_billing' => 'string',
        'jabatan_billing' => 'string',
        'no_telepon' => 'string',
        'mobile' => 'string',
        'email' => 'string',
        'nama_pic' => 'string',
        'jabatan' => 'string',
        'status_pelanggan' => 'string',
        'product_layanan' => 'string',
        'hasil_produksi' => 'string',
        'potensi_penjualan' => 'string',
        'valid' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
