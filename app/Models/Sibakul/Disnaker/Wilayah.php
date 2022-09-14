<?php

namespace App\Models\Sibakul\Disnaker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "disnaker_wilayah";
    protected $fillable =['jumlah','laki','perempuan','tahun','kabupaten'];
}
