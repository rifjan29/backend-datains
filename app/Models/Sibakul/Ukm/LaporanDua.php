<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanDua extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_laporan_dua";
    protected $fillable =['diy',
                          'kab_bantul',
                          'kab_gkidul',
                          'kab_sleman',
                          'kab_kprogo',
                          'kelas_binaan',
                          'kota_yk'];
}
