<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    public $fillable = ['no_laporan','nik_pelapor','nama_pelapor','no_hp_pelapor','alamat_pelapor','kronologi_singkat','id_kategori_laporan','status','response_by_id_admin'];
    public $timestamps = true;
    protected $primaryKey = 'id_laporan';
}
