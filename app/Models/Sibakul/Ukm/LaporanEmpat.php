<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanEmpat extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_laporan_empat";
    protected $fillable =['harga_rata',
                          'jml_produk',
                          'kelompok_produk_markethub'];
}
