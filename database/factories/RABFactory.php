<?php

namespace Database\Factories;

use App\Models\RAB;
use Illuminate\Database\Eloquent\Factories\Factory;

class RABFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RAB::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rab_no' => $this->faker->word,
        'rab_tgl_ttd' => $this->faker->word,
        'rab_tgl_awal' => $this->faker->word,
        'rab_tgl_akhir' => $this->faker->word,
        'catatan' => $this->faker->text,
        'project_rec_id' => $this->faker->randomDigitNotNull,
        'project_name' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
