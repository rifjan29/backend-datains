<?php

namespace App\Models\Sibakul\Disnaker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AngkatanKerjaWilayah extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "disnaker_angkatan_kerja_wilayah";
    protected $fillable =['jumlah','laki','perempuan','tahun','kabupaten'];
}
