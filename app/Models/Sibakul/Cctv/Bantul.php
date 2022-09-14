<?php

namespace App\Models\Sibakul\Cctv;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bantul extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "sibakul_survilance_bantul";
    protected $fillable =['type','idc'];
}
