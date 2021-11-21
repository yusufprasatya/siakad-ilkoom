<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\This;

class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Dosen::class;
    public function definition()
    {
        //Generate Data Dosen
        $daftar_titel = ["M.Kom", "M.Sc", "M.T", "M.Si"];
        return [
            'nid'   => $this->faker->unique()->numerify('99######'),
            'nama'  => $this->faker->firstName . " " .
                $this->faker->lastName . " " .
                $this->faker->randomElement($daftar_titel),
            'jurusan_id' => $this->faker->numberBetween(
                1,
                \App\Models\Jurusan::count()
            ),

        ];
    }
}
