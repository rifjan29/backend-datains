<?php

namespace App\Models\Sibakul\Disnaker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MigranAsalTujuan extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "disnaker_migran_asal_tujuan";
    protected $fillable =['jumlah_kk','jumlah_jiwa','tahun','kabupaten'];
}
