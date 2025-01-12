<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pelayan_KamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelayan_kamis')->insert([
            'judul' => 'Contoh Pelayan Kami',
            'deskripsi' => 'Ini adalah deskripsi contoh pelayan kami.',
            'gambar' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
