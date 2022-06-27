<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_jenis_kelamin";
    protected $fillable =['jenis_kelamin','btl','gk','kp',
                          'slm','yk', 'jumlah','aset','omset',
                          'rerata_aset','rerata_omset'];
}
