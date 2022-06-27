<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_pendidikan";
    protected $fillable =['pendidikan',
                          'BTL',
                          'GK',
                          'KP',
                          'SLM',
                          'YK',
                          'jumlah',
                          'aset',
                          'omset',
                          'rerata_aset',
                          'rerata_omset'];
}
