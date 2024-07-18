<?php

namespace Database\Factories;

use App\Models\Registrasi;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\Religion;

class RegistrasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $religionIds = Religion::pluck('id')->toArray();

        return [
            'nama' => $this->faker->name,
            'religion_id' => $this->faker->numberBetween(1, 5),
            'username' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'handphone' => $this->faker->phoneNumber,
            'tanggal_lahir' => $this->faker->date,
            'password' => Hash::make('password'),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki','Perempuan']),
            'biografi' => $this->faker->sentence,
        ];
    }
}
