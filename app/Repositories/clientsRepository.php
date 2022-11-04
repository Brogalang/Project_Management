<?php

namespace App\Repositories;

use App\Models\clients;
use App\Repositories\BaseRepository;

/**
 * Class clientsRepository
 * @package App\Repositories
 * @version October 26, 2022, 7:39 am UTC
*/

class clientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return clients::class;
    }
}
