<?php

namespace App\Models\Sibakul\koperasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelompok extends Model
{
    protected $connection= 'sibakul';
    protected $table = "koperasi_kelompok";
    protected $fillable =['koperasi','yk','volume_usaha','triwulan',
                            'slm','tahun','sisa_hasil_usaha',
                            'rat','pasif','modal_sendiri',
                            'modal_luar','manajer_wanita',
                            'manajer_pria','kp',
                            'aktif','karyawan_wanita',
                            'karyawan_pria','jumlah_anggota',
                            'jumlah_karyawan','jumlah_manajer',
                            'jml_ap','gk',
                            'diy','btl','asset', 'anggota_wanita','anggota_pria'];
}
