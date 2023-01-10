<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriLaporan extends Model
{
    use HasFactory;

    public $timestamps = true;
    public $fillable = ['nama_kategori_laporan'];
    protected $primaryKey = 'id_kategori_laporan';
}
