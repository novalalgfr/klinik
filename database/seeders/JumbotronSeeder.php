<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JumbotronSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jumbotrons')->insert([
            'judul' => 'Contoh Jumbotron',
            'deskripsi' => 'Ini adalah deskripsi contoh jumbotron.',
            'gambar' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
