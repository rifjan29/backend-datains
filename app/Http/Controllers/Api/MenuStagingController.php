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
use Illuminate\Support\Facades\Redis;
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
            if ($result == false) {
                return response()->json([
                    'message' => 'Data tidak sesuai.',
                    'data' => $result], 400);
            }
            return response()->json([
                'message' => 'Berhasil menambahkan data.',
                'data' => $result], 200);
            // if ($request->has('data')) {
            // }else{
            //     return response()->json(['message' => 'terjadi kesalahan',400]);
            // }
        } catch (Exception $e) {
            return response()->json(['message' => [$e->getMessage()], 400]);
        } catch (QueryException $e){
            return response()->json(['message' => [$e->getMessage()], 400]);
        }
    }

    public function getData($name, $jenis)
    {
        try {
            return getMenuStaging($name, $jenis);
        } catch (Exception $e) {
            // return $e;
            return response()->json(['message'=> 'terjadi kesalahan'],400);
        }
    }

    public function edit(Request $request, $name, $jenis, $id)
    {
        // $data = DB::connection('ditops')->table($jenis)->where('teknologi','=',$id)->where('tahun',$request->get('data'))->first();
       $data = edit($name,$jenis, $id, $request->get('data'));
        if ($data != null) {
            return response()->json([
                                    'data' => $data,
                                ],
                                200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Data tidak tersedia'],
            );
        }

    }

    public function update(Request $request, $name, $jenis, $id)
    {
        switch ($name) {
            case 'kominfo_ditops':
                if ($jenis == 'bts_ipfr'){
                    $data = DB::connection('ditops')->table($jenis)->where('teknologi',$id)->where('tahun',$request->get('data'))->update($request->only([
                        'teknologi',
                        'tahun',
                        'bts',
                        'created_at',
                        'updated_at',
                    ]));
                    return $data;
                }elseif($jenis == 'data_ipfr') {
                    $data = DB::connection('ditops')->table($jenis)->where('pita',$id)->where('range',$request->get('data'))->update([
                        'pita' => $request->get('pita'),
                        'range' => $request->get('range'),
                        'moda' => $request->get('moda'),
                        'nama_operator' => $request->get('nama_operator'),
                        'jenis' => $request->get('jenis'),
                        'area' => $request->get('area'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'data_labuh') {
                    $data = DB::connection('ditops')->table($jenis)->where('administrasi',$id)->where('tahun',$request->get('data'))->update([
                        'administrasi' => $request->get('administrasi'),
                        'tahun' => $request->get('tahun'),
                        'hak_labuh' => $request->get('hak_labuh'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'data_pnbp') {
                    $data = DB::connection('ditops')->table($jenis)->where('jenis',$id)->where('tahun',$request->get('data'))->update([
                        'jenis' => $request->get('jenis'),
                        'tahun' => $request->get('tahun'),
                        'realisasi' => $request->get('realisasi'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'iar') {
                    $data = DB::connection('ditops')->table($jenis)->where('provinsi',$id)->where('tahun',$request->get('data'))->update([
                        'provinsi' => $request->get('provinsi'),
                        'tahun' => $request->get('tahun'),
                        'iar' => $request->get('iar'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'ikrap') {
                    $data = DB::connection('ditops')->table($jenis)->where('provinsi',$id)->where('tahun',$request->get('data'))->update([
                        'provinsi' => $request->get('provinsi'),
                        'tahun' => $request->get('tahun'),
                        'ikrap' => $request->get('ikrap'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'pengunjung_ppt') {
                    $data = DB::connection('ditops')->table($jenis)->where('bulan',$id)->where('kategori',$request->get('data'))->update([
                        'bulan' => $request->get('bulan'),
                        'kategori' => $request->get('kategori'),
                        'jk' => $request->get('jk'),
                        'pengguna' => $request->get('pengguna'),
                        'pos_bln' => $request->get('pos_bln'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'radio_dinas_maritim_penerbangan') {
                    $data = DB::connection('ditops')->table($jenis)->where('ids',$id)->where('name',$request->get('data'))
                    ->update([
                        'ids' => $request->get('ids'),
                        'name' => $request->get('name'),
                        'sub_name' => $request->get('sub_name'),
                        'tahun' => $request->get('tahun'),
                        'stn' => $request->get('stn'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'radio_komunikasi') {
                    $data = DB::connection('ditops')->table($jenis)->where('ids',$id)->where('name',$request->get('data'))
                    ->update([
                        'ids' => $request->get('ids'),
                        'name' => $request->get('name'),
                        'short' => $request->get('short'),
                        'cat' => $request->get('cat'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'radio_station_frekuensi') {
                    $data = DB::connection('ditops')->table($jenis)->where('ids',$id)->where('name',$request->get('data'))
                    ->update([
                        'ids' => $request->get('ids'),
                        'name' => $request->get('name'),
                        'sub_name' => $request->get('sub_name'),
                        'tahun' => $request->get('tahun'),
                        'stn' => $request->get('stn'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'radio_station_jenis_penggunaan_frekuensi') {
                    $data = DB::connection('ditops')->table($jenis)->where('ids',$id)->where('name',$request->get('data'))
                    ->update([
                        'ids' => $request->get('ids'),
                        'name' => $request->get('name'),
                        'sub_name' => $request->get('sub_name'),
                        'stn' => $request->get('stn'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'radio_station_penggunaan_frekuensi') {
                    $data = DB::connection('ditops')->table($jenis)->where('name',$id)->where('sub_menu',$request->get('data'))
                    ->update([
                        'name' => $request->get('name'),
                        'sub_name' => $request->get('sub_name'),
                        'provinsi' => $request->get('provinsi'),
                        'stn' => $request->get('stn'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'radio_station_pita_frekuensi') {
                    $data = DB::connection('ditops')->table($jenis)->where('idb',$id)->where('name',$request->get('data'))
                    ->update([
                        'idb' => $request->get('idb'),
                        'name' => $request->get('name'),
                        'provinsi' => $request->get('provinsi'),
                        'stn' => $request->get('stn'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'reor') {
                    $data = DB::connection('ditops')->table($jenis)->where('kota',$id)->where('tahun',$request->get('data'))
                    ->update([
                        'kota' => $request->get('kota'),
                        'tahun' => $request->get('tahun'),
                        'kategori' => $request->get('kategori'),
                        'peserta' => $request->get('peserta'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'respon_call') {
                    $data = DB::connection('ditops')->table($jenis)->where('bulan',$id)->where('kategori',$request->get('data'))
                    ->update([
                        'bulan' => $request->get('bulan'),
                        'kategori' => $request->get('kategori'),
                        'jumlah_call' => $request->get('jumlah_call'),
                        'avg' => $request->get('avg'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'sertifikasi_kecakapan') {
                    $data = DB::connection('ditops')->table($jenis)->where('provinsi',$id)->where('tahun',$request->get('data'))
                    ->update([
                        'provinsi' => $request->get('provinsi'),
                        'tahun' => $request->get('tahun'),
                        'kategori' => $request->get('kategori'),
                        'peserta' => $request->get('peserta'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'sertifikat_reor') {
                    $data = DB::connection('ditops')->table($jenis)->where('jenis',$id)->where('tahun',$request->get('data'))
                    ->update([
                        'jenis' => $request->get('jenis'),
                        'tahun' => $request->get('tahun'),
                        'sertifikat' => $request->get('sertifikat'),
                        'created_at' => $request->get('created_at'),
                        'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }elseif($jenis == 'statistik_tiket') {
                    $data = DB::connection('ditops')->table($jenis)->where('bulan',$id)->where('kategori',$request->get('data'))
                    ->update([
                    'bulan' => $request->get('bulan'),
                    'kategori' => $request->get('kategori'),
                    'ticket' => $request->get('ticket'),
                    'created_at' => $request->get('created_at'),
                    'updated_at' => $request->get('updated_at'),
                    ]);
                    return $data;
                }
            break;
            case 'kominfo_edupak':
                if($jenis == 'tbl_butir') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_butir',$id)->where('id_sub_unsur',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'tbl_dupak') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_dupak',$id)->where('nip',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'tbl_file_spmlk') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_file',$id)->where('id_dupak',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'tbl_satuan') {
                    $data = DB::connection('edupak')->table($jenis)->where('kd_satuan',$id)->where('nm_satuan',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'tbl_sub_unsur') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_sub_unsur',$id)->where('id_unsur',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'tbl_unsur') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_unsur',$id)->where('id_type',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'tbl_user') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_user',$id)->where('nip',$request->get('data'))
                    ->update([]);
                    return $data;
                }
            break;
            case 'kominfo_filing':
            if($jenis == 'adm_assoc'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('adm',$request->get('data'))
                    ->update([]);
                }elseif($jenis == 'all_aff_ntw'){
                    $data = DB::connection('filing')->table($jenis)->where('aff_rec_id',$id)->where('aff_ntc_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'alloc_id'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_year',$id)->where('grp_id_last',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ant_type'){
                    $data = DB::connection('filing')->table($jenis)->where('pattern_id',$id)->where('f_ant_type',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ap30b_ref_agg'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id_dn',$id)->where('grp_id_up',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ap30b_ref_se'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id_a',$id)->where('grp_id_i',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ap30b_tr_res'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('freq_band',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'assgn'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'attch'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('attch_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'beam_tr'){
                    $data = DB::connection('filing')->table($jenis)->where('ant_diam',$id)->where('pattern_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'c_pfd'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'carrier_fr'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_emiss',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'cmr_grp_lnk'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('seq_cmr',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'cmr_history'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('itu_scraft_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'cmr_notice'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('itu_scraft_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'cmr_syst'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'com_el'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('prov',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'coord_agree_ntw'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('coord_prov',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'cost_recov'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_gpub',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'diag_grp'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('diag_type',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'e_ant'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('emi_rcp',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'e_ant_elev'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('azm',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'e_as_stn'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'e_srvcls'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_e_as',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'e_stn'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('stn_name',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'emiss'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ex_op_grp'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('beamgrp_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'fdg_ref'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'freq'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('emi_rcp',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'geo'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('sat_name',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'gpub'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'grp'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('ntc_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'grp_aff_rec'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('aff_rec_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'grp_lnk'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('lnk_grp_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'history'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'hor_elev'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('azm',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'link_epm'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_e_as',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'mask_info'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('mask_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'mask_lnk1'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'mask_lnk2'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'mod_char'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_emiss',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ngma'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('ngma_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'non_geo'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('sat_name',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'notice'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('prov',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ntc_commit'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('commit_type',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ntc_lnk'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('lnk_ntc_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ntc_lnk_ref'){
                    $data = DB::connection('filing')->table($jenis)->where('plan_id',$id)->where('ntc_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ntc_memo'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('adm_remark',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'orbit'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('orb_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'orbit_lnk'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('emi_rcp',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ovrl_epm'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id_up',$id)->where('grp_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'phase'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('orb_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'pl_strap'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('freq_dn',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'plan_pub'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('wic_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'provn'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('coord_prov',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'pub_ssn'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'pwr_ctrl'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_assgn',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'res49_sel'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('sat_name',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 's_as_stn'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('sat_name',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 's_beam'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('emi_rcp',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'sat_lnk'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('emi_rcp',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'sat_oper'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('lat_fr',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'sat_sys_provn'){
                    $data = DB::connection('filing')->table($jenis)->where('plan_id',$id)->where('ntwk_pack',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'scraft_cmr_freq'){
                    $data = DB::connection('filing')->table($jenis)->where('itu_scraft_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'scraft_cmr_syst'){
                    $data = DB::connection('filing')->table($jenis)->where('itu_scraft_id',$id)->where('ntwk_name',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'sps_results'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('ntwk_pack',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'srs_ooak'){
                    $data = DB::connection('filing')->table($jenis)->where('version_no',$id)->where('version_no_sub',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'srv_area'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('ctry',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'srv_cls'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'strap'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('strp_id',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'tr_aff_ntw'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('coord_prov',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'tr_provn'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('coord_prov',$request->get('data'))
                    ->update([]);
                    return $data;
                }
            break;
            case 'kominfo_pnbp':
                if ($jenis == 'pnbp_1') {
                    $data = DB::connection('pnbp')->table($jenis)->where('jenis_pnbp',$id)->where('blu_or_not',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif ($jenis == 'pnbp_2') {
                    $data = DB::connection('pnbp')->table($jenis)->where('jenis_pnbp',$id)->where('target',$request->get('data'))
                    ->update([]);
                    return $data;
                }
            break;
            case 'kominfo_siap':
                if($jenis == 'ta_absen'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tgl_masuk',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_angka_kredit'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_bagian'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_bagian',$id)->where('nama_bagian',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_cabang'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_cabang',$id)->where('nama_cabang',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_eselon'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_eselon',$id)->where('nama_eselon',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_grade'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_grade',$id)->where('nilai_grade',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_hukuman_disiplin'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tgl_awal',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_ijin'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_ijin',$id)->where('ket_ijin',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_ijin_berlapis'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_ijin',$id)->where('kode_ijin_lapisan',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_ijin_hari'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tgl_awal',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_ijin_jam'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tgl_ijin',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_jabatan'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_jabatan',$id)->where('nama_jabatan',$request->get('data'))
                    ->update([]);
                    return $data;
                }elseif($jenis == 'ta_karyawan'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('pin',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_lembur'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tgl_spl',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_libur'){
                    $data = DB::connection('siap')->table($jenis)->where('tgl_libur',$id)->where('ket_libur',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_libur_regional'){
                    $data = DB::connection('siap')->table($jenis)->where('tgl_libur',$id)->where('kode_cabang',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_nomenklatur'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_nomenklatur',$id)->where('nama_nomenklatur',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_otoritas_departemen'){
                    $data = DB::connection('siap')->table($jenis)->where('username',$id)->where('kode_departemen',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_pnbp'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tahun',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_pola'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_shift',$id)->where('tgl_mulai',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_pph'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tahun',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_ptkp'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_kawin',$id)->where('batas_ptpkp',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_range'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_range',$id)->where('kode_absen',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_range_detail'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_range',$id)->where('kode_departemen',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_riwayat_karyawan'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('bulan',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_status_pegawai'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_status',$id)->where('nama_status',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_subbagian'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_subbagian',$id)->where('nama_subbagian',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ta_unit'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_unit',$id)->where('nama_unit',$request->get('data'))->update([]);
                    return $data;
                }
            break;
            case 'kominfo_siemon':
                if($jenis == 'lap_monev_perangkat_online'){
                    $data = DB::connection('siap')->table($jenis)->where('jenis',$id)->where('sertifikat',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'rekap_lap_mon_perangkat_upt'){
                    $data = DB::connection('siap')->table($jenis)->where('upt',$id)->where('pelaksanaan',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'rekap_lap_montib_perangkat_upt'){
                    $data = DB::connection('siap')->table($jenis)->where('upt',$id)->where('jumlah_pelaksanaan_monitoring',$request->get('data'))->update([]);
                    return $data;
                }
            break;
            case 'kominfo_simpeg':
                if($jenis == 'riwayat_pendidikan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tahun_lulus',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 't_pns'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('nomor_sk_pns',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_angka_kredit'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_penetapan',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_bagian'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_bagian',$id)->where('nama_bagian',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_bahasa'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('nama_bahasa',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_cabang'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_cabang',$id)->where('nama_cabang',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_cpns'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('nomor_nota_pers_bkn',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_departemen'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_departemen',$id)->where('nama_departemen',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_diklat_eselon'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_eselon',$id)->where('tunjangan_eselon',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_diklat_fungsional'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_diklat_fungsional',$id)->where('nama_diklat_fungsional',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_diklat_struktural'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_diklat_struktural',$id)->where('nama_diklat_struktural',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_diklat_teknis'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_diklat_teknis',$id)->where('nama_diklat_teknis',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_golongan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_golongan',$id)->where('nama_golongan',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_jabatan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_jabatan',$id)->where('nama_jabatan',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_jasa'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('id_jasa',$id)->where('nip',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_jenis_jabatan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_jenis_jabatan',$id)->where('nama_jenis_jabatan',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_jenis_jasa'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_jenis_jasa',$id)->where('nama_tanda_jasa',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_jenis_kenaikan_pangkat'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_jenis_kenaikan_pangkat',$id)->where('nama_jenis_kenaikan',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_jurusan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_jurusan',$id)->where('nama',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_karyawan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('kode_departemen',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_kedudukan_pegawai'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_kedudukan_pegawai',$id)->where('nama',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_pendidikan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_pendidikan',$id)->where('nama',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_penilaian'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_nilai',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_riwayat_diklat_fungsional'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_mulai',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_riwayat_diklat_struktural'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_mulai',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_riwayat_diklat_teknis'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_mulai',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_riwayat_seminar'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_mulai',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_sklain'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('id_sklain',$id)->where('nip',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_skp'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tahun',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_status_pegawai'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_status',$id)->where('nama_status',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_stlud'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_status',$id)->where('keterangan',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_subbagian'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_status',$id)->where('nama_subbagian',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_tgs_luar_negri'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('id_tugas',$id)->where('nip',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_tim_kerja'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode',$id)->where('nama',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_unit'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode',$id)->where('nama',$request->get('data'))->update([]);
                }elseif($jenis == 'ta_unit_2'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('aktif',$id)->where('nama_unit',$request->get('data'))->update([]);
                }
            break;
            case 'kominfo_staging':
                if ($jenis = '#Tableau_18_sid_00005616_1_Group') {
                    $data = DB::connection('staging')->table($jenis)->where('Jenis Permohonan (group)',$id)->where('jenis_permohonan',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'data_mon_hf'){
                    $data = DB::connection('staging')->table($jenis)->where('stasiun_monitoring',$id)->where('tahun',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'data_sertifikasi'){
                    $data = DB::connection('staging')->table($jenis)->where('id',$id)->where('plg_id',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'event_penting'){
                    $data = DB::connection('staging')->table($jenis)->where('id',$id)->where('pita_frekuensi',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'frekuensi_terbanyak'){
                    $data = DB::connection('staging')->table($jenis)->where('dinas',$id)->where('total',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'hasil_monitor'){
                    $data = DB::connection('staging')->table($jenis)->where('dinas',$id)->where('sub_service',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'hs_telekomunikasi'){
                    $data = DB::connection('staging')->table($jenis)->where('tahun',$id)->where('kode_hs',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'mon_hf'){
                    $data = DB::connection('staging')->table($jenis)->where('administrasi',$id)->where('kode',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'penggunaan_frekuensi'){
                    $data = DB::connection('staging')->table($jenis)->where('id',$id)->where('client',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'penggunaan_frekuensi_2'){
                    $data = DB::connection('staging')->table($jenis)->where('id',$id)->where('penggunaan',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'peraturan_sdppi'){
                    $data = DB::connection('staging')->table($jenis)->where('nama_peraturan',$id)->where('Peraturan',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'periode_tahunan_bwa'){
                    $data = DB::connection('staging')->table($jenis)->where('pita',$id)->where('operator',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'perjanjian_sdppi'){
                    $data = DB::connection('staging')->table($jenis)->where('nama_perjanjian',$id)->where('perjanjian',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'pita_frekuensi_by_tahun'){
                    $data = DB::connection('staging')->table($jenis)->where('pita',$id)->where('termonitor',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'refarming'){
                    $data = DB::connection('staging')->table($jenis)->where('judul',$id)->where('rentang_pita_sebelum',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'rekap_frekuensi_by_tahun'){
                    $data = DB::connection('staging')->table($jenis)->where('upt',$id)->where('termonitor',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'ringkasan_apbn'){
                    $data = DB::connection('staging')->table($jenis)->where('judul',$id)->where('apbn_2020',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'sianti'){
                    $data = DB::connection('staging')->table($jenis)->where('nama',$id)->where('total',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'smfr'){
                    $data = DB::connection('staging')->table($jenis)->where('index',$id)->where('unit_id',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'stasiun_hf'){
                    $data = DB::connection('staging')->table($jenis)->where('site_name',$id)->where('city',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'tibnas_dan_rol'){
                    $data = DB::connection('staging')->table($jenis)->where('upt',$id)->where('provinsi',$request->get('data'))->update([]);
                    return $data;
                }
            break;
            case 'kominfo_staging2':
                if ($jenis == 'alat_perangkat') {
                    $data = DB::connection('staging_dua')->table($jenis)->where('perangkat',$id)->where('jumlah',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'balai_uji_tetap'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('nama',$id)->where('alamat',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'cakupan_smfr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('tahun',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'capaian_spektrum'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('tahun',$id)->where('capaian',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'data_imei'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('data_imei',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'data_labuh'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('administrasi',$id)->where('tahun',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'data_lokai_penempatan'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('cluster',$id)->where('jumlah_venue',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'data_lokasi_penempatan'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('cluster',$id)->where('jenis',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'dmp_sfr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('equipment',$id)->where('penyelenggara',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'hasil_mon_sfr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('jenis',$id)->where('sfr',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'hs_telekomunikasi_new'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('hs_code',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'isr_smntara'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('equipment',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'jumlah_alat_ukur'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('perangkat',$id)->where('jumlah',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'jumlah_sdppi'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('unit',$id)->where('jumlah',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'lhu_tiap_balai'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('balai',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'mon_sfr_perpanas'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('alat',$id)->where('sfr',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'nilai_bhr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('pita_frekuensi',$id)->where('total',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'opening_perangkat'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('no',$id)->where('perarngkat',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'pengakuan_laboraturium'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('dasar_hukum',$id)->where('kelompok',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'penyeselaian_pegujian'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('tahun',$id)->where('jumlah1',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'perangkat_digunakan'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('cluster',$id)->where('jumlah_ver',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'perangkat_pertandingan'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('cluster',$id)->where('jumlah_venue',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'perangkat_wsbk&perpanas'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('perangkat',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'perkembangan_pnbp'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('kementrian_kelembagaan',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'personil_perangkat_open'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('lokasi',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'rekap_system_smfr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('upt',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'sebaran_penggunaan'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('kabupaten',$id)->where('sfr',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'sebaran_penggunaan_smfr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('COL 1',$id)->where('created_at',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'sfr_broadcast'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('lokasi',$id)->where('sfr',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'target_penambahan_spektrum'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('judul',$id)->where('2020',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'upt_personil_wsbk_perpanas'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('unit',$request->get('data'))->update([]);
                    return $data;
                }
            break;
            case 'kominfo_staging3':
                if ($jenis == 'capaian_spektrum') {
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('capaian_spektrum',$id)->where('dataset_jumlah_kab_termonitor',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'dataset_jumlah_kab_termonitor'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('operator',$id)->where('pita',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'filing_new'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('filing_satelit',$id)->where('pengelola',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'monitoring_hf_tetap'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('monitoring',$id)->where('2017',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'satelit_filling'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('kegunaan',$id)->where('manufaktur',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'target_penambahan'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('jenis',$id)->where('tahun',$request->get('data'))->update([]);
                    return $data;
                }elseif($jenis == 'target_realisasi2'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('kode',$id)->where('jenis_pnbp',$request->get('data'))->update([]);
                    return $data;
                }
            break;
            default:
                # code...
                break;
        }
        // $data = DB::connection('ditops')->table($jenis)->where('teknologi','=',$id)->where('tahun',$request->get('data'))->update([
        //     'teknologi' => $request->get('teknologi'),
        //     'tahun' => $request->get('tahun'),
        //     'bts' => $request->get('bts')
        // ]);
        if ($data != null) {
            return response()->json([
                                    'message' => 'data berhasil diganti',
                                ],
                                200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Data tidak tersedia'],
            );
        }
    }
    public function delete(Request $request, $name, $jenis, $id)
    {
        $data = delete($name,$jenis, $id,$request->get('data'));
        if ($data != null) {
            return response()->json([
                                    'message' => 'data berhasil dihapus.',
                                ],
                                200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Data tidak tersedia'],
            );
        }
    }
}
