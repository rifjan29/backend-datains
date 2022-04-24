<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanEnam extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_laporan_enam";
    protected $fillable =['jml_trans',
                          'nilai_ongkir',
                          'nilai_trans',
                          'ratanilai_ongkir',
                          'ratanilai_trans',
                          'uraian'];
}
