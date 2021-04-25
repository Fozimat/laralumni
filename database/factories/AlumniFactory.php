<?php

namespace Database\Factories;

use App\Models\Alumni;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumniFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumni::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nisn' => $this->faker->unique()->numberBetween($min = 1000, $max = 9000),
            'nama' => $this->faker->name,
            'jenis_kelamin' => $this->faker->randomElement(['Pria', 'Wanita']),
            'tahun_masuk' => $this->faker->numberBetween($min = 1995, $max = 2002),
            'tahun_lulus' => $this->faker->numberBetween($min = 1995, $max = 2002),
            'tgl_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tempat_lahir' => $this->faker->city,
            'alamat' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'no_telp' => $this->faker->phoneNumber,
            'foto' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
