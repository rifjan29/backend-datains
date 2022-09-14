<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanLima extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_laporan_lima";
    protected $fillable =['harga_rata',
                          'jml_produk',
                          'jml_stok',
                          'kelompok_produk_yia'];
}
