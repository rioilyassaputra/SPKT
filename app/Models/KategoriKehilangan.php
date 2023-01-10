<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKehilangan extends Model
{
    use HasFactory;

    public $timestamps = true;
    public $fillable = ['nama_kehilangan','persyaratan'];
    protected $primaryKey = 'id_kategori_kehilangan';
}
