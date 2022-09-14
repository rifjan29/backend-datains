<?php

namespace App\Models\Sibakul\Disnaker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Migran extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "disnaker_migran";
    protected $fillable =["kp_laki","yk_perempuan", "yk_laki", "yk_jumlah",
                          "tahun", "slm_perempuan","slm_laki", "slm_jumlah",
                          "negara_tujuan", "kp_perempuan", "kp_jumlah",
                          "jml_perempuan", "jml_laki", "jml_jumlah",
                          "gk_perempuan", "gk_laki", "gk_jumlah",
                          "btl_perempuan", "btl_laki", "btl_jumlah"];
}
