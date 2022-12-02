<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KominfoDitops;
use App\Models\MenuStaging;
use App\Models\Sibakul\koperasi\jenis;
use DB;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class MenuStagingController extends Controller
{
    public function upload(Request $request)
    {

        $validate = Validator($request->all(),[
            'name' => 'required',
            'jenis' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $result = setDataStaging($request->get('name'), $request->get('jenis'), $request->get('data'));
            return response()->json([
                'message' => 'Berhasil menambahkan data.',
                'data' => $result], 200);
            // if ($request->has('data')) {
            // }else{
            //     return response()->json(['message' => 'terjadi kesalahan',400]);
            // }
        } catch (Exception $e) {
            return response()->json(['message' => 'terjadi kesalahan', 400]);
        } catch (QueryException $e){
            return response()->json(['message' => 'terjadi kesalahan', 400]);
        }
    }

    public function getData($name, $jenis)
    {
        if ($name == 'kominfo_ditops') {
            if ($jenis == 'bts_ipfr') {
               $data = DB::connection('ditops')->table('bts_ipfr')->get();
               return response()->json(['data' => $data],200);
            }elseif($jenis == 'data_ipfr'){
                $data = DB::connection('ditops')->table('data_ipfr')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'data_labuh'){
                $data = DB::connection('ditops')->table('data_labuh')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'data_pnbp'){
                $data = DB::connection('ditops')->table('data_pnbp')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'iar'){
                $data = DB::connection('ditops')->table('iar')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ikrap'){
                $data = DB::connection('ditops')->table('ikrap')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'pengunjung_ppt'){
                $data = DB::connection('ditops')->table('pengunjung_ppt')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'radio_dinas_maritim_penerbangan'){
                $data = DB::connection('ditops')->table('radio_dinas_maritim_penerbangan')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'radio_komunikasi'){
                $data = DB::connection('ditops')->table('radio_komunikasi')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'radio_station_frekuensi'){
                $data = DB::connection('ditops')->table('radio_station_frekuensi')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'radio_station_jenis_penggunaan_frekuensi'){
                $data = DB::connection('ditops')->table('radio_station_jenis_penggunaan_frekuensi')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'radio_station_penggunaan_frekuensi'){
                $data = DB::connection('ditops')->table('radio_station_penggunaan_frekuensi')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'radio_station_pita_frekuensi'){
                $data = DB::connection('ditops')->table('radio_station_pita_frekuensi')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'reor'){
                $data = DB::connection('ditops')->table('reor')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'respon_call'){
                $data = DB::connection('ditops')->table('respon_call')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'sertifikasi_kecakapan'){
                $data = DB::connection('ditops')->table('sertifikasi_kecakapan')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'sertifikat_reor'){
                $data = DB::connection('ditops')->table('sertifikat_reor')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'statistik_tiket'){
                $data = DB::connection('ditops')->table('statistik_tiket')->get();
                return response()->json(['data' => $data],200);
            }else{
                return response()->json([
                    'message' => 'Terjadi kesalahan.',
                    ],403);
            }
        }elseif ($name == 'kominfo_edupak') {
            if ($jenis == 'tbl_butir') {
                $data = DB::connection('edupak')->table('tbl_butir')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'tbl_dupak'){
                $data = DB::connection('edupak')->table('tbl_dupak')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'tbl_file_spmlk'){
                $data = DB::connection('edupak')->table('tbl_file_spmlk')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'tbl_satuan'){
                $data = DB::connection('edupak')->table('tbl_satuan')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'tbl_sub_unsur'){
                $data = DB::connection('edupak')->table('tbl_sub_unsur')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'tbl_unsur'){
                $data = DB::connection('edupak')->table('tbl_unsur')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'tbl_user'){
                $data = DB::connection('edupak')->table('tbl_user')->get();
                return response()->json(['data' => $data],200);
            }else{
                return response()->json([
                    'message' => 'Terjadi kesalahan.',
                    ],403);
            }
        }elseif ($name == 'kominfo_filing') {
            if ($jenis == '#Tableau_11_sid_00000158_3_Connect_CheckCreateTempTableCap') {
                $data = DB::connection('filing')->table('#Tableau_11_sid_00000158_3_Connect_CheckCreateTempTableCap')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'adm_assoc'){
                $data= DB::connection('filing')->table('adm_assoc')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'all_aff_ntw'){
                $data= DB::connection('filing')->table('all_aff_ntw')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'alloc_id'){
                $data= DB::connection('filing')->table('alloc_id')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ant_type'){
                $data= DB::connection('filing')->table('ant_type')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ap30b_ref_agg'){
                $data= DB::connection('filing')->table('ap30b_ref_agg')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ap30b_ref_se'){
                $data= DB::connection('filing')->table('ap30b_ref_se')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ap30b_tr_res'){
                $data= DB::connection('filing')->table('ap30b_tr_res')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'assgn'){
                $data= DB::connection('filing')->table('assgn')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'attch'){
                $data= DB::connection('filing')->table('attch')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'beam_tr'){
                $data= DB::connection('filing')->table('beam_tr')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'c_pfd'){
                $data= DB::connection('filing')->table('c_pfd')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'carrier_fr'){
                $data= DB::connection('filing')->table('carrier_fr')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'cmr_grp_lnk'){
                $data= DB::connection('filing')->table('cmr_grp_lnk')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'cmr_history'){
                $data= DB::connection('filing')->table('cmr_history')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'cmr_notice'){
                $data= DB::connection('filing')->table('cmr_notice')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'cmr_syst'){
                $data= DB::connection('filing')->table('cmr_syst')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'com_el'){
                $data= DB::connection('filing')->table('com_el')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'coord_agree_ntw'){
                $data= DB::connection('filing')->table('coord_agree_ntw')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'cost_recov'){
                $data= DB::connection('filing')->table('cost_recov')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'diag_grp'){
                $data= DB::connection('filing')->table('diag_grp')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'e_ant'){
                $data= DB::connection('filing')->table('e_ant')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'e_ant_elev'){
                $data= DB::connection('filing')->table('e_ant_elev')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'e_as_stn'){
                $data= DB::connection('filing')->table('e_as_stn')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'e_srvcls'){
                $data= DB::connection('filing')->table('e_srvcls')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'e_stn'){
                $data= DB::connection('filing')->table('e_stn')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'emiss'){
                $data= DB::connection('filing')->table('emiss')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ex_op_grp'){
                $data= DB::connection('filing')->table('ex_op_grp')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'fdg_ref'){
                $data= DB::connection('filing')->table('fdg_ref')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'freq'){
                $data= DB::connection('filing')->table('freq')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'geo'){
                $data= DB::connection('filing')->table('geo')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'gpub'){
                $data= DB::connection('filing')->table('gpub')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'grp'){
                $data= DB::connection('filing')->table('grp')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'grp_aff_rec'){
                $data= DB::connection('filing')->table('grp_aff_rec')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'grp_lnk'){
                $data= DB::connection('filing')->table('grp_lnk')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'history'){
                $data= DB::connection('filing')->table('history')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'hor_elev'){
                $data= DB::connection('filing')->table('hor_elev')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'link_epm'){
                $data= DB::connection('filing')->table('link_epm')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'mask_info'){
                $data= DB::connection('filing')->table('mask_info')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'mask_lnk1'){
                $data= DB::connection('filing')->table('mask_lnk1')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'mask_lnk2'){
                $data= DB::connection('filing')->table('mask_lnk2')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'mod_char'){
                $data= DB::connection('filing')->table('mod_char')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ngma'){
                $data= DB::connection('filing')->table('ngma')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'non_geo'){
                $data= DB::connection('filing')->table('non_geo')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'notice'){
                $data= DB::connection('filing')->table('notice')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ntc_commit'){
                $data= DB::connection('filing')->table('ntc_commit')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ntc_lnk'){
                $data= DB::connection('filing')->table('ntc_lnk')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ntc_lnk_ref'){
                $data= DB::connection('filing')->table('ntc_lnk_ref')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ntc_memo'){
                $data= DB::connection('filing')->table('ntc_memo')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'orbit'){
                $data= DB::connection('filing')->table('orbit')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'orbit_lnk'){
                $data= DB::connection('filing')->table('orbit_lnk')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ovrl_epm'){
                $data= DB::connection('filing')->table('ovrl_epm')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'phase'){
                $data= DB::connection('filing')->table('phase')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'pl_strap'){
                $data= DB::connection('filing')->table('pl_strap')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'plan_pub'){
                $data= DB::connection('filing')->table('plan_pub')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'provn'){
                $data= DB::connection('filing')->table('provn')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'pub_ssn'){
                $data= DB::connection('filing')->table('pub_ssn')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'pwr_ctrl'){
                $data= DB::connection('filing')->table('pwr_ctrl')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'res49_sel'){
                $data= DB::connection('filing')->table('res49_sel')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 's_as_stn'){
                $data= DB::connection('filing')->table('s_as_stn')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 's_beam'){
                $data= DB::connection('filing')->table('s_beam')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'sat_lnk'){
                $data= DB::connection('filing')->table('sat_lnk')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'sat_oper'){
                $data= DB::connection('filing')->table('sat_oper')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'sat_sys_provn'){
                $data= DB::connection('filing')->table('sat_sys_provn')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'scraft_cmr_freq'){
                $data= DB::connection('filing')->table('scraft_cmr_freq')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'scraft_cmr_syst'){
                $data= DB::connection('filing')->table('scraft_cmr_syst')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'sps_results'){
                $data= DB::connection('filing')->table('sps_results')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'srs_ooak'){
                $data= DB::connection('filing')->table('srs_ooak')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'srv_area'){
                $data= DB::connection('filing')->table('srv_area')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'srv_cls'){
                $data= DB::connection('filing')->table('srv_cls')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'strap'){
                $data= DB::connection('filing')->table('strap')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'tr_aff_ntw'){
                $data= DB::connection('filing')->table('tr_aff_ntw')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'tr_provn'){
                $data= DB::connection('filing')->table('tr_provn')->get();
                return response()->json(['data' => $data],200);
            }else{

            }
        }elseif ($name == 'kominfo_pnbp') {
            if ($jenis == 'pnbp_1') {
                $data= DB::connection('pnbp')->table('pnbp_1')->get();
                return response()->json(['data' => $data],200);
            }elseif ($jenis == 'pnbp_2') {
                $data= DB::connection('pnbp')->table('pnbp_2')->get();
                return response()->json(['data' => $data],200);
            }
        }elseif ($name == 'kominfo_siap') {
            if ($jenis == 'ta_absen') {
                $data= DB::connection('siap')->table('ta_absen')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_angka_kredit'){
                $data= DB::connection('siap')->table('ta_angka_kredit')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_bagian'){
                $data= DB::connection('siap')->table('ta_bagian')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_cabang'){
                $data= DB::connection('siap')->table('ta_cabang')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_eselon'){
                $data= DB::connection('siap')->table('ta_eselon')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_grade'){
                $data= DB::connection('siap')->table('ta_grade')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_hukuman_disiplin'){
                $data= DB::connection('siap')->table('ta_hukuman_disiplin')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_ijin'){
                $data= DB::connection('siap')->table('ta_ijin')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_ijin_berlapis'){
                $data= DB::connection('siap')->table('ta_ijin_berlapis')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_ijin_hari'){
                $data= DB::connection('siap')->table('ta_ijin_hari')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_ijin_jam'){
                $data= DB::connection('siap')->table('ta_ijin_jam')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_jabatan'){
                $data= DB::connection('siap')->table('ta_jabatan')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_karyawan'){
                $data= DB::connection('siap')->table('ta_karyawan')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_lembur'){
                $data= DB::connection('siap')->table('ta_lembur')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_libur'){
                $data= DB::connection('siap')->table('ta_libur')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_libur_regional'){
                $data= DB::connection('siap')->table('ta_libur_regional')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_nomenklatur'){
                $data= DB::connection('siap')->table('ta_nomenklatur')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_otoritas_departemen'){
                $data= DB::connection('siap')->table('ta_otoritas_departemen')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_pnbp'){
                $data= DB::connection('siap')->table('ta_pnbp')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_pola'){
                $data= DB::connection('siap')->table('ta_pola')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_pph'){
                $data= DB::connection('siap')->table('ta_pph')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_ptkp'){
                $data= DB::connection('siap')->table('ta_ptkp')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_range'){
                $data= DB::connection('siap')->table('ta_range')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_range_detail'){
                $data= DB::connection('siap')->table('ta_range_detail')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_riwayat_karyawan'){
                $data= DB::connection('siap')->table('ta_riwayat_karyawan')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_status_pegawai'){
                $data= DB::connection('siap')->table('ta_status_pegawai')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_subbagian'){
                $data= DB::connection('siap')->table('ta_subbagian')->get();
                return response()->json(['data' => $data],200);
            }elseif($jenis == 'ta_unit'){
                $data= DB::connection('siap')->table('ta_unit')->get();
                return response()->json(['data' => $data],200);
            }
        }elseif ($name == 'kominfo_siemon') {

        }elseif ($name == 'kominfo_simpeg') {

        }elseif ($name == 'kominfo_staging') {

        }elseif ($name == 'kominfo_staging2') {

        }else{
            return response()->json([
                                    'message' => 'Terjadi kesalahan.',
            ],403);
        }
    }


}
