<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SektorEkraf extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_sektor_ekraf";
    protected $fillable =['sektor_ekraf','btl','gk','kp',
    'slm','yk', 'jumlah','aset','omset',
    'rerata_aset','rerata_omset'];
}
