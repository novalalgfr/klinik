<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tentang_KamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tentang_kamis')->insert([
            'judul' => 'Contoh desc tentang kami',
            'deskripsi' => 'Healing Terbaik adalah dengan Melaksanakan sholat 5 waktu bukan ke bandung',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
