<?php

namespace App\Models\Sibakul\E_lapor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koordinat extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "elapor_koordinat";
    protected $fillable =['idk','judul','isi','lat','lon','sub_kategori','kategori','nama_file','image_path'];
}
