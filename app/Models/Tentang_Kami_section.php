<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang_Kami_section extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi', 'gambar'];

}
