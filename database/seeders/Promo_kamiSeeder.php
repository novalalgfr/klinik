<?php

 namespace Database\Seeders;
 
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Database\Seeder;
 
 class Promo_kamiSeeder extends Seeder
 {
     /**
      * Run the database seeds.
      *
      * @return void
      */
     public function run()
     {
         DB::table('promo_kami')->insert([
             'gambar' => null,
             'created_at' => now(),
             'updated_at' => now(),
         ]);
     }
 }