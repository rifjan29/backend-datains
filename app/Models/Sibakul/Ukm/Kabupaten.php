<?php

namespace App\Models\Sibakul\Ukm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "ukm_kabupaten";
    protected $fillable =['jumlah','kabupaten'];
}
