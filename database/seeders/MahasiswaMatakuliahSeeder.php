<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\MahasiswaMatakuliah::factory()->count(200)->create();
    }
}
