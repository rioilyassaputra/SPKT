<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanDetail extends Model
{
    use HasFactory;

    public $timestamps = true;
    public $fillable = ['id_laporan','id_kategori_kehilangan','detail_kehilangan'];
    protected $primaryKey = 'id_laporan_detail';
}
