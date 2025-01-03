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
            'title' => 'Contoh Jumbotron',
            'description' => 'Ini adalah deskripsi contoh jumbotron.',
            'image_path' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
