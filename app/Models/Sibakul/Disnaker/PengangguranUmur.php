<?php

namespace App\Models\Sibakul\Disnaker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengangguranUmur extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "disnaker_pengangguran_umur";
    protected $fillable =['jumlah','laki','perempuan','tahun','kelompok_umur'];
}
