<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanSatu extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_laporan_satu";
    protected $fillable =['jenis_pembinaan',
                          'jml_kegiatan',
                          'jml_peserta',
                          'tahun_periode'];
}
