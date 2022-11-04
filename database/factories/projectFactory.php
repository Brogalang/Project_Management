<?php

namespace Database\Factories;

use App\Models\project;
use Illuminate\Database\Eloquent\Factories\Factory;

class projectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_id' => $this->faker->word,
        'departement' => $this->faker->word,
        'sales_am' => $this->faker->word,
        'client' => $this->faker->word,
        'project' => $this->faker->word,
        'project_fullname' => $this->faker->text,
        'jenis_project' => $this->faker->word,
        'kontrak_no' => $this->faker->word,
        'kontrak_tgl_mulai' => $this->faker->word,
        'kontrak_tgl_selesai' => $this->faker->word,
        'bamk_tgl' => $this->faker->word,
        'nilai_kontrak_BT' => $this->faker->word,
        'nilai_kontrak_AT' => $this->faker->word,
        'rab_no' => $this->faker->word,
        'rab_tgl_approved' => $this->faker->word,
        'status' => $this->faker->word,
        'catatan' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
