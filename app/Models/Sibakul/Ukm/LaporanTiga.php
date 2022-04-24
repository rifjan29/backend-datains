<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanTiga extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_laporan_tiga";
    protected $fillable =['diy',
                          'kab_bantul',
                          'kab_gkidul',
                          'kab_sleman',
                          'kab_kprogo',
                          'uraian',
                          'kota_yk'];
}
