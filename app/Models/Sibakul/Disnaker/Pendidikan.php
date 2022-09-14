<?php

namespace App\Models\Sibakul\Disnaker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "disnaker_pendidikan";
    protected $fillable =['jumlah','laki','perempuan','tahun','tingkat_pendidikan'];
}
