<?php

namespace App\Models\Sibakul\Cctv;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KominfoSleman extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "sibakul_survilance_kominfosleman";
    protected $fillable =['type','idc'];
}
