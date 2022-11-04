<?php

namespace Database\Factories;

use App\Models\clients;
use Illuminate\Database\Eloquent\Factories\Factory;

class clientsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = clients::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => $this->faker->word,
        'bidang_usaha' => $this->faker->word,
        'npwp' => $this->faker->word,
        'nama_perusahaan' => $this->faker->word,
        'alamat_1' => $this->faker->text,
        'alamat_2' => $this->faker->text,
        'kelurahan' => $this->faker->word,
        'kecamatan' => $this->faker->word,
        'kota' => $this->faker->word,
        'provinsi' => $this->faker->word,
        'no_kontak_billing' => $this->faker->word,
        'email_billing' => $this->faker->word,
        'website_billing' => $this->faker->word,
        'pic_billing' => $this->faker->word,
        'jabatan_billing' => $this->faker->word,
        'no_telepon' => $this->faker->word,
        'mobile' => $this->faker->word,
        'email' => $this->faker->word,
        'nama_pic' => $this->faker->word,
        'jabatan' => $this->faker->word,
        'status_pelanggan' => $this->faker->word,
        'product_layanan' => $this->faker->word,
        'hasil_produksi' => $this->faker->word,
        'potensi_penjualan' => $this->faker->word,
        'valid' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
