<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_klasifikasi";
    protected $fillable =['klasifikasi_usaha',
    'btl','gk','kp',
    'slm','yk', 'jumlah','aset','omset',
    'rerata_aset','rerata_omset'];
}
