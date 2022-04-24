<?php

namespace App\Models\Sibakul\Disnaker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umur extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "disnaker_umur";
    protected $fillable =['jumlah','laki','perempuan','tahun','kelompok_umur'];
}
