<?php

namespace App\Models\v2\bbppt;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AplikasiSubmit extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "aplikasi_submit";
    protected $fillable =['bulan','jumlah_submit','tahun'];
}
