<?php

namespace App\Models\Sibakul\Disnaker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelamin extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "disnaker_kelamin";
    protected $fillable =['btl','gk','jenis_kelamin','jumlah','kp','slm','tahun','yk'];
}
