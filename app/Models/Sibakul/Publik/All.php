<?php

namespace App\Models\Sibakul\Publik;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class All extends Model
{
    use HasFactory;
    protected $connection= 'sibakul';
    protected $table = "sibakul_publik";
    protected $fillable =['idp','sektor_kehutanan','tk_tenaga_borongan',
            'tk_perempuan','tk_laki_laki','tahun', 'sektor_transportasi',
            'sektor_real_estate_usaha_persewaan','sektor_pertanian',
            'sektor_perdagangan','sektor_pariwisata','sektor_konstruksi',
            'sektor_komunikasi','sektor_kelautan_dan_perikanan',
            'aneka_usaha','sektor_jasa_pendidikan','sektor_jasa_kesehatan',
            'sektor_industri_pengolahan','sektor_energi_dan_sumber_daya_mineral',
            'perdagangan', 'nilai_omset',
            'jenis_data','jasa_perorangan_yang_melayani_rumah_tangga',
            'industri_pertanian','insdustri_non_pertanian',
            'ekonomi_kreatif'];
}
