<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_kelas";
    protected $fillable =['kelas','btl','gk','kp',
    'slm','yk', 'jumlah','aset','omset',
    'rerata_aset','rerata_omset'];
}
