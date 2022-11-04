<?php

namespace Database\Factories;

use App\Models\rab_sub_details;
use Illuminate\Database\Eloquent\Factories\Factory;

class rab_sub_detailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = rab_sub_details::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rab_dtl_rec_id' => $this->faker->randomDigitNotNull,
        'nama_barang_jasa' => $this->faker->word,
        'hrg_satuan' => $this->faker->randomDigitNotNull,
        'quantity' => $this->faker->randomDigitNotNull,
        'frekuensi' => $this->faker->randomDigitNotNull,
        'deskripsi' => $this->faker->text,
        'catatan' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
