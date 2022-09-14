<?php

namespace App\Models\Sibakul\koperasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koperasi extends Model
{
    protected $connection= 'sibakul';
    protected $table = "koperasi_publik";
    protected $fillable =['koperasi','volume_usaha','triwulan',
                            'tahun','sisa_hasil_usaha',
                            'rat','pasif','modal_sendiri',
                            'modal_luar','manajer_wanita',
                            'manajer_pria','aktif','karyawan_wanita',
                            'karyawan_pria','jumlah_anggota',
                            'jumlah_karyawan','jumlah_manajer',
                            'jml_ap','asset', 'anggota_wanita','anggota_pria'];
}
