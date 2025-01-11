<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tentang_Kami_SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tentang__kami_sections')->insert([
            'judul' => 'Contoh desc laman tentang kami',
            'deskripsi' => 'Ini adalah deskripsi contoh kebalik.',
            'gambar' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
