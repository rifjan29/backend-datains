<?php

namespace App\Models\Sibakul\Disnaker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MigranAsal extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "disnaker_migran_asal";
    protected $fillable =['jumlah','laki','perempuan','tahun','kabupaten'];
}
