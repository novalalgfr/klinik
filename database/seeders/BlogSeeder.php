<?php

 namespace Database\Seeders;
 
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Database\Seeder;
 
 class BlogSeeder extends Seeder
 {
     /**
      * Run the database seeds.
      *
      * @return void
      */
     public function run()
     {
         DB::table('blogs')->insert([
             'judul' => 'Contoh Blog',
             'deskripsi_pendek' => 'Ini adalah deskripsi pendek contoh blog.',
             'deskripsi_panjang' => 'Ini adalah deskripsi panjang contoh blog.',
             'gambar' => null,
             'created_at' => now(),
             'updated_at' => now(),
         ]);
     }
 }