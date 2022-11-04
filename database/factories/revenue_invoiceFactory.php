<?php

namespace Database\Factories;

use App\Models\revenue_invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class revenue_invoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = revenue_invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor_invoice' => $this->faker->word,
        'tanggal_invoice' => $this->faker->word,
        'nilai_invoice' => $this->faker->word,
        'project_id' => $this->faker->randomDigitNotNull,
        'keterangan' => $this->faker->text,
        'termin' => $this->faker->word,
        'periode' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
