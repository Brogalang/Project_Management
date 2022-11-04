<?php

namespace Database\Factories;

use App\Models\rab_detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class rab_detailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = rab_detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rab_rec_id' => $this->faker->randomDigitNotNull,
        'rab_no' => $this->faker->word,
        'rab_item_no' => $this->faker->randomDigitNotNull,
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
