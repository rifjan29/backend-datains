<?php

namespace App\Models\Sibakul\Cctv;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kp extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "sibakul_survilance_kp";
    protected $fillable =['type','idc'];
}
