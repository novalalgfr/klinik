<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treatments')->insert([
            'gambar' => null,
            'judul' => 'Contoh treatment',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
