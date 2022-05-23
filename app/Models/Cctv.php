<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cctv extends Model
{
    use HasFactory;

    protected $connection = 'sibakul';
    protected $table = 'sibakul_cctv';
    protected $guarded = [];
}
