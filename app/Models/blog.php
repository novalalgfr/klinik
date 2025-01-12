<?php

 namespace App\Models;
 
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 
 class blog extends Model
 {
     use HasFactory;
 
     protected $fillable = ['judul', 'deskripsi_pendek', 'deskripsi_panjang', 'gambar'];
 }