<?php

namespace Database\Factories;

use App\Models\invoices;
use Illuminate\Database\Eloquent\Factories\Factory;

class invoicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = invoices::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_id' => $this->faker->randomDigitNotNull,
        'invoice_no' => $this->faker->word,
        'invoice_date' => $this->faker->word,
        'nama_pelanggan' => $this->faker->word,
        'jatuh_tempo' => $this->faker->word,
        'uraian_invoice' => $this->faker->text,
        'nilai_invoice_rupiah' => $this->faker->word,
        'nilai_invoice_usd' => $this->faker->word,
        'ppn_rupiah' => $this->faker->randomDigitNotNull,
        'ppn_usd' => $this->faker->randomDigitNotNull,
        'bulan' => $this->faker->randomDigitNotNull,
        'data_valid' => $this->faker->word,
        'pic' => $this->faker->word,
        'tanggal_bayar' => $this->faker->word,
        'status' => $this->faker->word,
        'keterangan' => $this->faker->text,
        'tipe' => $this->faker->word,
        'bulan_bayar' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
