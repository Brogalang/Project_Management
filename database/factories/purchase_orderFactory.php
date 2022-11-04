<?php

namespace Database\Factories;

use App\Models\purchase_order;
use Illuminate\Database\Eloquent\Factories\Factory;

class purchase_orderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = purchase_order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor_po' => $this->faker->word,
        'tanggal_po' => $this->faker->word,
        'rab_id' => $this->faker->randomDigitNotNull,
        'project_id' => $this->faker->randomDigitNotNull,
        'kategori' => $this->faker->word,
        'nama_barang_jasa' => $this->faker->word,
        'nilai_barang_jasa' => $this->faker->word,
        'no_item_rab' => $this->faker->word,
        'np_sub_item_rab' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
