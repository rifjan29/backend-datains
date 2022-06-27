<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disabilitas extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_disabilitas";
    protected $fillable =['disabilitas',
    'btl','gk','kp',
    'slm','yk', 'jumlah','aset','omset',
    'rerata_aset','rerata_omset'];
}
