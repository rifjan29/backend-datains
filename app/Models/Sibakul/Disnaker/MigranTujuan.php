<?php

namespace App\Models\Sibakul\Disnaker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MigranTujuan extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "disnaker_migran_tujuan";
    protected $fillable =['jumlah_kk','jumlah_jiwa','tahun','kab_prov'];
}
