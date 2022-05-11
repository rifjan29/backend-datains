<?php

namespace App\Models\Sibakul\Cctv;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relationships extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "sibakul_cctv";
    protected $fillable =['idc','name','stream-url','stream-thumbnail'];
}
