<?php

namespace Database\Factories;

use App\Models\cost_payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class cost_paymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cost_payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'payment_id' => $this->faker->word,
        'invoice_id' => $this->faker->randomDigitNotNull,
        'payment_date' => $this->faker->word,
        'payment_value' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
