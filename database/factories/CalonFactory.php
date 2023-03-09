<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Calon>
 */
class CalonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'jabatan' => $this->faker->jobTitle,
            'nik' => $this->faker->numberBetween(1000000000000000, 9999999999999999),
            'dokumen_ktp' => $this->faker->imageUrl(640, 480, 'people'),
            'dokumen_kk' => $this->faker->imageUrl(640, 480, 'people'),
            'dokumen_ijazah_awal' => $this->faker->imageUrl(640, 480, 'people'),
            'dokumen_ijazah_akhir' => $this->faker->imageUrl(640, 480, 'people'),
            'dokumen_surat_lamaran' => $this->faker->imageUrl(640, 480, 'people'),
            'dokumen_surat_kesehatan' => $this->faker->imageUrl(640, 480, 'people'),
            'dokumen_skck' => $this->faker->imageUrl(640, 480, 'people'),
            'dokumen_surat_pengadilan' => $this->faker->imageUrl(640, 480, 'people'),

            'status' => $this->faker->randomElement(['menunggu', 'diterima', 'ditolak']),
            'keterangan' => $this->faker->randomElement(['test psikologi' , 'test wawancara' , 'test pengetahuan' , 'test administrasi']),
            

        ];
    }
}
