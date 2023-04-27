<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hasiltest>
 */
class HasiltestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id = rand(1,10);
        return [
            'user_id' => $id,
            'calon_id' => $id,
            'hasil_psikologi' => rand(0,100),
            'hasil_wawancara' => rand(0,100),
            'hasil_pengetahuan' => rand(0,100),
            'hasil_administrasi' => rand(0,100),
        ];
    }
}
