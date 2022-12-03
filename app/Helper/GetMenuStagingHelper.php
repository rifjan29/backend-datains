<?php

function getMenuStaging($name, $jenis){
    if ($name == 'kominfo_ditops') {
        if ($jenis == 'bts_ipfr') {
               $header = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('bts_ipfr');
               $data = DB::connection('ditops')->table('bts_ipfr')->get();
            return response()->json([
                                    'header' => $header,
                                    'data' => $data,
                                    ],
                                    200);
        }elseif($jenis == 'data_ipfr'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('data_ipfr');
            $data = DB::connection('ditops')->table('data_ipfr')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'data_labuh'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('data_labuh');
            $data = DB::connection('ditops')->table('data_labuh')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'data_pnbp'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('data_pnbp');
            $data = DB::connection('ditops')->table('data_pnbp')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'iar'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('iar');
            $data = DB::connection('ditops')->table('iar')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ikrap'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('ikrap');
            $data = DB::connection('ditops')->table('ikrap')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'pengunjung_ppt'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('pengunjung_ppt');
            $data = DB::connection('ditops')->table('pengunjung_ppt')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'radio_dinas_maritim_penerbangan'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('radio_dinas_maritim_penerbangan');
            $data = DB::connection('ditops')->table('radio_dinas_maritim_penerbangan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'radio_komunikasi'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('radio_komunikasi');
            $data = DB::connection('ditops')->table('radio_komunikasi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'radio_station_frekuensi'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('radio_station_frekuensi');
            $data = DB::connection('ditops')->table('radio_station_frekuensi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'radio_station_jenis_penggunaan_frekuensi'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('radio_station_jenis_penggunaan_frekuensi');
            $data = DB::connection('ditops')->table('radio_station_jenis_penggunaan_frekuensi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'radio_station_penggunaan_frekuensi'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('radio_station_penggunaan_frekuensi');
            $data = DB::connection('ditops')->table('radio_station_penggunaan_frekuensi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'radio_station_pita_frekuensi'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('radio_station_pita_frekuensi');
            $data = DB::connection('ditops')->table('radio_station_pita_frekuensi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'reor'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('reor');
            $data = DB::connection('ditops')->table('reor')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'respon_call'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('respon_call');
            $data = DB::connection('ditops')->table('respon_call')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sertifikasi_kecakapan'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('sertifikasi_kecakapan');
            $data = DB::connection('ditops')->table('sertifikasi_kecakapan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sertifikat_reor'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('sertifikat_reor');
            $data = DB::connection('ditops')->table('sertifikat_reor')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'statistik_tiket'){
            $result = DB::connection('ditops')->getSchemaBuilder()->getColumnListing('statistik_tiket');
            $data = DB::connection('ditops')->table('statistik_tiket')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }else{
            return response()->json([
                'message' => 'Terjadi kesalahan.',
                ],403);
        }
    }elseif ($name == 'kominfo_edupak') {
        if ($jenis == 'tbl_butir') {
            $result = DB::connection('edupak')->getSchemaBuilder()->getColumnListing('tbl_butir');
            $data = DB::connection('edupak')->table('tbl_butir')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'tbl_dupak'){
            $result = DB::connection('edupak')->getSchemaBuilder()->getColumnListing('tbl_dupak');
            $data = DB::connection('edupak')->table('tbl_dupak')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'tbl_file_spmlk'){
            $result = DB::connection('edupak')->getSchemaBuilder()->getColumnListing('tbl_file_spmlk');
            $data = DB::connection('edupak')->table('tbl_file_spmlk')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'tbl_satuan'){
            $result = DB::connection('edupak')->getSchemaBuilder()->getColumnListing('tbl_satuan');
            $data = DB::connection('edupak')->table('tbl_satuan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'tbl_sub_unsur'){
            $result = DB::connection('edupak')->getSchemaBuilder()->getColumnListing('tbl_sub_unsur');
            $data = DB::connection('edupak')->table('tbl_sub_unsur')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'tbl_unsur'){
            $result = DB::connection('edupak')->getSchemaBuilder()->getColumnListing('tbl_unsur');
            $data = DB::connection('edupak')->table('tbl_unsur')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'tbl_user'){
            $result = DB::connection('edupak')->getSchemaBuilder()->getColumnListing('tbl_user');
            $data = DB::connection('edupak')->table('tbl_user')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }else{
            return response()->json([
                'message' => 'Terjadi kesalahan.',
                ],403);
        }
    }elseif ($name == 'kominfo_filing') {
        if ($jenis == '#Tableau_11_sid_00000158_3_Connect_CheckCreateTempTableCap') {
            $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('#Tableau_11_sid_00000158_3_Connect_CheckCreateTempTableCap');
            $data = DB::connection('filing')->table('#Tableau_11_sid_00000158_3_Connect_CheckCreateTempTableCap')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'adm_assoc'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('adm_assoc');
            $data= DB::connection('filing')->table('adm_assoc')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'all_aff_ntw'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('all_aff_ntw');
            $data= DB::connection('filing')->table('all_aff_ntw')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'alloc_id'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('alloc_id');
            $data= DB::connection('filing')->table('alloc_id')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ant_type'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('ant_type');
            $data= DB::connection('filing')->table('ant_type')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ap30b_ref_agg'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('ap30b_ref_agg');
            $data= DB::connection('filing')->table('ap30b_ref_agg')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ap30b_ref_se'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('ap30b_ref_se');
            $data= DB::connection('filing')->table('ap30b_ref_se')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ap30b_tr_res'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('ap30b_tr_res');
            $data= DB::connection('filing')->table('ap30b_tr_res')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'assgn'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('assgn');
            $data= DB::connection('filing')->table('assgn')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'attch'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('attch');
            $data= DB::connection('filing')->table('attch')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'beam_tr'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('beam_tr');
            $data= DB::connection('filing')->table('beam_tr')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'c_pfd'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('c_pfd');
            $data= DB::connection('filing')->table('c_pfd')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'carrier_fr'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('carrier_fr');
            $data= DB::connection('filing')->table('carrier_fr')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'cmr_grp_lnk'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('cmr_grp_lnk');
            $data= DB::connection('filing')->table('cmr_grp_lnk')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'cmr_history'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('cmr_history');
            $data= DB::connection('filing')->table('cmr_history')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'cmr_notice'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('cmr_notice');
            $data= DB::connection('filing')->table('cmr_notice')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'cmr_syst'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('cmr_syst');
            $data= DB::connection('filing')->table('cmr_syst')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'com_el'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('com_el');
            $data= DB::connection('filing')->table('com_el')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'coord_agree_ntw'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('coord_agree_ntw');
            $data= DB::connection('filing')->table('coord_agree_ntw')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'cost_recov'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('cost_recov');
            $data= DB::connection('filing')->table('cost_recov')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'diag_grp'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('diag_grp');
            $data= DB::connection('filing')->table('diag_grp')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'e_ant'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('e_ant');
            $data= DB::connection('filing')->table('e_ant')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'e_ant_elev'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('e_ant_elev');
            $data= DB::connection('filing')->table('e_ant_elev')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'e_as_stn'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('e_as_stn');
            $data= DB::connection('filing')->table('e_as_stn')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'e_srvcls'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('e_srvcls');
            $data= DB::connection('filing')->table('e_srvcls')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'e_stn'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('e_stn');
            $data= DB::connection('filing')->table('e_stn')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'emiss'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('emiss');
            $data= DB::connection('filing')->table('emiss')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ex_op_grp'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('ex_op_grp');
            $data= DB::connection('filing')->table('ex_op_grp')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'fdg_ref'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('fdg_ref');
            $data= DB::connection('filing')->table('fdg_ref')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'freq'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('freq');
            $data= DB::connection('filing')->table('freq')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'geo'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('geo');
            $data= DB::connection('filing')->table('geo')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'gpub'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('gpub');
            $data= DB::connection('filing')->table('gpub')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'grp'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('grp');
            $data= DB::connection('filing')->table('grp')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'grp_aff_rec'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('grp_aff_rec');
            $data= DB::connection('filing')->table('grp_aff_rec')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'grp_lnk'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('grp_lnk');
            $data= DB::connection('filing')->table('grp_lnk')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'history'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('history');
            $data= DB::connection('filing')->table('history')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'hor_elev'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('hor_elev');
            $data= DB::connection('filing')->table('hor_elev')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'link_epm'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('link_epm');
            $data= DB::connection('filing')->table('link_epm')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'mask_info'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('mask_info');
            $data= DB::connection('filing')->table('mask_info')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'mask_lnk1'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('mask_lnk1');
            $data= DB::connection('filing')->table('mask_lnk1')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'mask_lnk2'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('mask_lnk2');
            $data= DB::connection('filing')->table('mask_lnk2')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'mod_char'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('mod_char');
            $data= DB::connection('filing')->table('mod_char')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ngma'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('ngma');
            $data= DB::connection('filing')->table('ngma')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'non_geo'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('non_geo');
            $data= DB::connection('filing')->table('non_geo')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'notice'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('notice');
            $data= DB::connection('filing')->table('notice')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ntc_commit'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('ntc_commit');
            $data= DB::connection('filing')->table('ntc_commit')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ntc_lnk'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('ntc_lnk');
            $data= DB::connection('filing')->table('ntc_lnk')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ntc_lnk_ref'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('ntc_lnk_ref');
            $data= DB::connection('filing')->table('ntc_lnk_ref')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ntc_memo'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('ntc_memo');
            $data= DB::connection('filing')->table('ntc_memo')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'orbit'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('orbit');
            $data= DB::connection('filing')->table('orbit')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'orbit_lnk'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('orbit_lnk');
            $data= DB::connection('filing')->table('orbit_lnk')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ovrl_epm'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('ovrl_epm');
            $data= DB::connection('filing')->table('ovrl_epm')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'phase'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('phase');
            $data= DB::connection('filing')->table('phase')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'pl_strap'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('pl_strap');
            $data= DB::connection('filing')->table('pl_strap')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'plan_pub'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('plan_pub');
            $data= DB::connection('filing')->table('plan_pub')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'provn'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('provn');
            $data= DB::connection('filing')->table('provn')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'pub_ssn'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('pub_ssn');
            $data= DB::connection('filing')->table('pub_ssn')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'pwr_ctrl'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('pwr_ctrl');
            $data= DB::connection('filing')->table('pwr_ctrl')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'res49_sel'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('res49_sel');
            $data= DB::connection('filing')->table('res49_sel')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 's_as_stn'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('s_as_stn');
            $data= DB::connection('filing')->table('s_as_stn')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 's_beam'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('s_beam');
            $data= DB::connection('filing')->table('s_beam')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sat_lnk'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('sat_lnk');
            $data= DB::connection('filing')->table('sat_lnk')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sat_oper'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('sat_oper');
            $data= DB::connection('filing')->table('sat_oper')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sat_sys_provn'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('sat_sys_provn');
            $data= DB::connection('filing')->table('sat_sys_provn')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'scraft_cmr_freq'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('scraft_cmr_freq');
            $data= DB::connection('filing')->table('scraft_cmr_freq')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'scraft_cmr_syst'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('scraft_cmr_syst');
            $data= DB::connection('filing')->table('scraft_cmr_syst')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sps_results'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('sps_results');
            $data= DB::connection('filing')->table('sps_results')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'srs_ooak'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('srs_ooak');
            $data= DB::connection('filing')->table('srs_ooak')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'srv_area'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('srv_area');
            $data= DB::connection('filing')->table('srv_area')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'srv_cls'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('srv_cls');
            $data= DB::connection('filing')->table('srv_cls')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'strap'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('strap');
            $data= DB::connection('filing')->table('strap')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'tr_aff_ntw'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('tr_aff_ntw');
            $data= DB::connection('filing')->table('tr_aff_ntw')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'tr_provn'){
           $result = DB::connection('filing')->getSchemaBuilder()->getColumnListing('tr_provn');
            $data= DB::connection('filing')->table('tr_provn')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }else{

        }
    }elseif ($name == 'kominfo_pnbp') {
        if ($jenis == 'pnbp_1') {
            $result = DB::connection('pnbp')->getSchemaBuilder()->getColumnListing('pnbp_1');
            $data= DB::connection('pnbp')->table('pnbp_1')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif ($jenis == 'pnbp_2') {
            $result = DB::connection('pnbp')->getSchemaBuilder()->getColumnListing('pnbp_2');
            $data= DB::connection('pnbp')->table('pnbp_2')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }
    }elseif ($name == 'kominfo_siap') {
        if ($jenis == 'ta_absen') {
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_absen');
            $data= DB::connection('siap')->table('ta_absen')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_angka_kredit'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_angka_kredit');
            $data= DB::connection('siap')->table('ta_angka_kredit')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_bagian'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_bagian');
            $data= DB::connection('siap')->table('ta_bagian')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_cabang'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_cabang');
            $data= DB::connection('siap')->table('ta_cabang')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_eselon'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_eselon');
            $data= DB::connection('siap')->table('ta_eselon')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_grade'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_grade');
            $data= DB::connection('siap')->table('ta_grade')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_hukuman_disiplin'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_hukuman_disiplin');
            $data= DB::connection('siap')->table('ta_hukuman_disiplin')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_ijin'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_ijin');
            $data= DB::connection('siap')->table('ta_ijin')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_ijin_berlapis'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_ijin_berlapis');
            $data= DB::connection('siap')->table('ta_ijin_berlapis')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_ijin_hari'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_ijin_hari');
            $data= DB::connection('siap')->table('ta_ijin_hari')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_ijin_jam'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_ijin_jam');
            $data= DB::connection('siap')->table('ta_ijin_jam')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_jabatan'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_jabatan');
            $data= DB::connection('siap')->table('ta_jabatan')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_karyawan'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_karyawan');
            $data= DB::connection('siap')->table('ta_karyawan')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_lembur'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_lembur');
            $data= DB::connection('siap')->table('ta_lembur')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_libur'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_libur');
            $data= DB::connection('siap')->table('ta_libur')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_libur_regional'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_libur_regional');
            $data= DB::connection('siap')->table('ta_libur_regional')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_nomenklatur'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_nomenklatur');
            $data= DB::connection('siap')->table('ta_nomenklatur')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_otoritas_departemen'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_otoritas_departemen');
            $data= DB::connection('siap')->table('ta_otoritas_departemen')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_pnbp'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_pnbp');
            $data= DB::connection('siap')->table('ta_pnbp')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_pola'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_pola');
            $data= DB::connection('siap')->table('ta_pola')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_pph'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_pph');
            $data= DB::connection('siap')->table('ta_pph')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_ptkp'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_ptkp');
            $data= DB::connection('siap')->table('ta_ptkp')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_range'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_range');
            $data= DB::connection('siap')->table('ta_range')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_range_detail'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_range_detail');
            $data= DB::connection('siap')->table('ta_range_detail')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_riwayat_karyawan'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_riwayat_karyawan');
            $data= DB::connection('siap')->table('ta_riwayat_karyawan')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_status_pegawai'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_status_pegawai');
            $data= DB::connection('siap')->table('ta_status_pegawai')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_subbagian'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_subbagian');
            $data= DB::connection('siap')->table('ta_subbagian')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == 'ta_unit'){
            $result = DB::connection('siap')->getSchemaBuilder()->getColumnListing('ta_unit');
            $data= DB::connection('siap')->table('ta_unit')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }
    }elseif ($name == 'kominfo_siemon') {
        if ($jenis == 'lap_monev_perangkat_online') {
           $result = DB::connection('siemon')->getSchemaBuilder()->getColumnListing('lap_monev_perangkat_online');
            $data= DB::connection('siemon')->table('lap_monev_perangkat_online')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'rekap_lap_mon_perangkat_upt'){
            $result = DB::connection('siemon')->getSchemaBuilder()->getColumnListing('rekap_lap_mon_perangkat_upt');
            $data = DB::connection('siemon')->table('rekap_lap_mon_perangkat_upt')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'rekap_lap_montib_perangkat_upt'){
            $result = DB::connection('siemon')->getSchemaBuilder()->getColumnListing('rekap_lap_montib_perangkat_upt');
            $data = DB::connection('siemon')->table('rekap_lap_montib_perangkat_upt')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }
    }elseif ($name == 'kominfo_simpeg') {
        if ($jenis == '#Tableau_10_sid_00000494_4_Group') {
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_10_sid_00000494_4_Group');
            $data= DB::connection('simpeg')->table('#Tableau_10_sid_00000494_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data],200);
        }elseif($jenis == '#Tableau_10_sid_00000494_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_10_sid_00000494_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_10_sid_00000494_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_12_sid_00000492_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_12_sid_00000492_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_12_sid_00000492_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_12_sid_00000492_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_12_sid_00000492_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_12_sid_00000492_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_12_sid_00000496_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_12_sid_00000496_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_12_sid_00000496_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_12_sid_00000496_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_12_sid_00000496_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_12_sid_00000496_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_12_sid_00000496_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_12_sid_00000496_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_12_sid_00000496_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_12_sid_00000496_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_12_sid_00000496_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_12_sid_00000496_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_0000019B_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_0000019B_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_0000019B_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_000001EB_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_000001EB_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_000001EB_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_000001EB_5_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_000001EB_5_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_000001EB_5_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00000493_6_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00000493_6_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00000493_6_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00000537_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00000537_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00000537_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00000537_5_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00000537_5_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00000537_5_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00000556_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00000556_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00000556_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00000556_5_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00000556_5_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00000556_5_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00000556_6_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00000556_6_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00000556_6_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00000763_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00000763_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00000763_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00000763_5_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00000763_5_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00000763_5_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00002306_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00002306_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00002306_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00002306_5_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00002306_5_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00002306_5_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00002306_6_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00002306_6_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00002306_6_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_13_sid_00002306_7_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_13_sid_00002306_7_Group');
            $data = DB::connection('simpeg')->table('#Tableau_13_sid_00002306_7_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_14_sid_00000168_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_14_sid_00000168_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_14_sid_00000168_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_14_sid_00000175_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_14_sid_00000175_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_14_sid_00000175_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_14_sid_0000017E_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_14_sid_0000017E_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_14_sid_0000017E_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_14_sid_00000490_5_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_14_sid_00000490_5_Group');
            $data = DB::connection('simpeg')->table('#Tableau_14_sid_00000490_5_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_14_sid_00000490_6_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_14_sid_00000490_6_Group');
            $data = DB::connection('simpeg')->table('#Tableau_14_sid_00000490_6_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_14_sid_00000497_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_14_sid_00000497_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_14_sid_00000497_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_000001F0_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_000001F0_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_000001F0_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_000001F0_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_000001F0_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_000001F0_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_00000491_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_00000491_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_00000491_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_00000495_5_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_00000495_5_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_00000495_5_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_00000538_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_00000538_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_00000538_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_00000538_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_00000538_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_00000538_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_00000558_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_00000558_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_00000558_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_00000558_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_00000558_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_00000558_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_00000558_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_00000558_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_00000558_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_00000768_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_00000768_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_00000768_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_00000768_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_00000768_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_00000768_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_00000768_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_00000768_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_00000768_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_15_sid_0000230C_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_15_sid_0000230C_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_15_sid_0000230C_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_00000169_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_00000169_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_00000169_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_00000176_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_00000176_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_00000176_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_0000017F_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_0000017F_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_0000017F_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_000001A6_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_000001A6_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_000001A6_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_000001ED_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_000001ED_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_000001ED_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_00000499_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_00000499_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_00000499_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_00000559_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_00000559_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_00000559_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_00000559_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_00000559_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_00000559_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_00000559_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_00000559_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_00000559_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_0000076A_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_0000076A_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_0000076A_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_0000076A_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_0000076A_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_0000076A_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_16_sid_0000230A_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_16_sid_0000230A_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_16_sid_0000230A_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00000172_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00000172_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00000172_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_000001F3_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_000001F3_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_000001F3_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_000001F3_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_000001F3_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_000001F3_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_000003A5_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_000003A5_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_000003A5_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00000498_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00000498_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00000498_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00000498_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00000498_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00000498_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00000498_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00000498_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00000498_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00000539_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00000539_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00000539_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00000539_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00000539_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00000539_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00000557_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00000557_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00000557_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00000557_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00000557_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00000557_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00000557_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00000557_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00000557_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00000769_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00000769_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00000769_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00000769_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00000769_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00000769_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_00002313_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_00002313_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_00002313_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_17_sid_0000E204_3_Connect_CheckCreateTempTableCap'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_17_sid_0000E204_3_Connect_CheckCreateTempTableCap');
            $data = DB::connection('simpeg')->table('#Tableau_17_sid_0000E204_3_Connect_CheckCreateTempTableCap')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_18_sid_000001F1_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_18_sid_000001F1_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_18_sid_000001F1_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_18_sid_000001F1_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_18_sid_000001F1_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_18_sid_000001F1_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_18_sid_0000049B_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_18_sid_0000049B_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_18_sid_0000049B_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_18_sid_0000049B_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_18_sid_0000049B_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_18_sid_0000049B_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_18_sid_0000049B_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_18_sid_0000049B_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_18_sid_0000049B_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_18_sid_000053B3_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_18_sid_000053B3_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_18_sid_000053B3_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_18_sid_000053B3_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_18_sid_000053B3_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_18_sid_000053B3_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_00000173_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_00000173_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_00000173_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_000001A9_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_000001A9_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_000001A9_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_000001EF_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_000001EF_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_000001EF_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_000001EF_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_000001EF_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_000001EF_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_000003A6_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_000003A6_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_000003A6_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_0000049A_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_0000049A_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_0000049A_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_0000049A_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_0000049A_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_0000049A_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_0000049A_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_0000049A_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_0000049A_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_00000540_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_00000540_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_00000540_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_0000055B_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_0000055B_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_0000055B_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_00000772_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_00000772_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_00000772_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_000053B0_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_000053B0_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_000053B0_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_000053B0_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_000053B0_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_000053B0_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_000053B0_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_000053B0_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_000053B0_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_19_sid_000053B0_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_19_sid_000053B0_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_19_sid_000053B0_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_000001A3_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_000001A3_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_000001A3_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_000001A3_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_000001A3_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_000001A3_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_000001AC_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_000001AC_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_000001AC_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_000001AC_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_000001AC_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_000001AC_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_000001EE_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_000001EE_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_000001EE_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_000001EE_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_000001EE_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_000001EE_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_00000456_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_00000456_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_00000456_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_00000456_5_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_00000456_5_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_00000456_5_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_00000456_6_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_00000456_6_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_00000456_6_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_00000456_7_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_00000456_7_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_00000456_7_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_0000049D_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_0000049D_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_0000049D_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_0000049D_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_0000049D_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_0000049D_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_0000053B_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_0000053B_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_0000053B_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_0000053B_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_0000053B_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_0000053B_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_00000563_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_00000563_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_00000563_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_00000563_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_00000563_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_00000563_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_00000775_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_00000775_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_00000775_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_00000775_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_00000775_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_00000775_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_00002309_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_00002309_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_00002309_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_000053AF_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_000053AF_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_000053AF_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_000053AF_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_000053AF_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_000053AF_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_20_sid_000053AF_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_20_sid_000053AF_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_20_sid_000053AF_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_00000097_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_00000097_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_00000097_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_000001A1_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_000001A1_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_000001A1_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_000001A1_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_000001A1_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_000001A1_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_000001A1_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_000001A1_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_000001A1_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_000001A8_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_000001A8_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_000001A8_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_000001EC_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_000001EC_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_000001EC_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_000001EC_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_000001EC_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_000001EC_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_0000049E_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_0000049E_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_0000049E_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_0000049E_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_0000049E_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_0000049E_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_00000565_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_00000565_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_00000565_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_00000565_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_00000565_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_00000565_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_00002314_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_00002314_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_00002314_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_00002314_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_00002314_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_00002314_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_000053B2_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_000053B2_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_000053B2_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_21_sid_000053B2_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_21_sid_000053B2_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_21_sid_000053B2_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_00000098_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_00000098_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_00000098_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_0000019F_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_0000019F_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_0000019F_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_0000019F_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_0000019F_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_0000019F_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_000001F2_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_000001F2_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_000001F2_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_0000045A_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_0000045A_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_0000045A_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_0000045A_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_0000045A_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_0000045A_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_0000045A_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_0000045A_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_0000045A_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_0000045A_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_0000045A_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_0000045A_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_0000049C_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_0000049C_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_0000049C_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_00000543_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_00000543_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_00000543_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_00000543_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_00000543_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_00000543_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_00000562_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_00000562_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_00000562_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_00000562_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_00000562_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_00000562_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_00000562_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_00000562_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_00000562_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_0000076E_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_0000076E_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_0000076E_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_0000076E_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_0000076E_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_0000076E_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_0000230F_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_0000230F_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_0000230F_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_0000230F_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_0000230F_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_0000230F_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_000053AE_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_000053AE_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_000053AE_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_000053AE_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_000053AE_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_000053AE_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_22_sid_000053AE_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_22_sid_000053AE_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_22_sid_000053AE_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_00000099_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_00000099_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_00000099_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_000001A4_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_000001A4_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_000001A4_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_000001A4_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_000001A4_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_000001A4_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_000001A4_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_000001A4_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_000001A4_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_000001AE_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_000001AE_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_000001AE_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_000001AE_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_000001AE_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_000001AE_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_0000049F_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_0000049F_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_0000049F_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_0000049F_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_0000049F_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_0000049F_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_0000049F_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_0000049F_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_0000049F_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_0000049F_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_0000049F_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_0000049F_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_0000053C_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_0000053C_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_0000053C_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_0000053C_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_0000053C_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_0000053C_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_0000055F_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_0000055F_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_0000055F_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_0000055F_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_0000055F_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_0000055F_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_0000055F_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_0000055F_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_0000055F_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_23_sid_00002308_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_23_sid_00002308_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_23_sid_00002308_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000001A0_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000001A0_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000001A0_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000001A0_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000001A0_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000001A0_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000001A0_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000001A0_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000001A0_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000001A0_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000001A0_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000001A0_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000001AD_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000001AD_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000001AD_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000001F9_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000001F9_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000001F9_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000001F9_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000001F9_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000001F9_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000004A1_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000004A1_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000004A1_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000004A1_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000004A1_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000004A1_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000004A1_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000004A1_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000004A1_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000004A1_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000004A1_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000004A1_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_0000053E_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_0000053E_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_0000053E_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_0000055E_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_0000055E_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_0000055E_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_0000055E_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_0000055E_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_0000055E_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_0000076C_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_0000076C_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_0000076C_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000053B1_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000053B1_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000053B1_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_24_sid_000053B1_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_24_sid_000053B1_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_24_sid_000053B1_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_25_sid_0000009A_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_25_sid_0000009A_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_25_sid_0000009A_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_25_sid_000001A2_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_25_sid_000001A2_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_25_sid_000001A2_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_25_sid_000001A2_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_25_sid_000001A2_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_25_sid_000001A2_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_25_sid_000001FA_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_25_sid_000001FA_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_25_sid_000001FA_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_25_sid_000001FA_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_25_sid_000001FA_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_25_sid_000001FA_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_25_sid_000004A0_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_25_sid_000004A0_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_25_sid_000004A0_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_25_sid_0000053D_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_25_sid_0000053D_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_25_sid_0000053D_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_25_sid_0000053D_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_25_sid_0000053D_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_25_sid_0000053D_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_25_sid_00000564_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_25_sid_00000564_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_25_sid_00000564_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_25_sid_00000774_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_25_sid_00000774_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_25_sid_00000774_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_25_sid_00000774_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_25_sid_00000774_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_25_sid_00000774_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_26_sid_0000009B_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_26_sid_0000009B_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_26_sid_0000009B_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_26_sid_000001F4_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_26_sid_000001F4_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_26_sid_000001F4_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_26_sid_00000545_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_26_sid_00000545_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_26_sid_00000545_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_26_sid_00000545_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_26_sid_00000545_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_26_sid_00000545_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_26_sid_0000055A_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_26_sid_0000055A_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_26_sid_0000055A_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_26_sid_00000773_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_26_sid_00000773_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_26_sid_00000773_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_26_sid_00002307_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_26_sid_00002307_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_26_sid_00002307_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_26_sid_00002307_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_26_sid_00002307_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_26_sid_00002307_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_27_sid_0000009C_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_27_sid_0000009C_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_27_sid_0000009C_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_27_sid_000001F5_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_27_sid_000001F5_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_27_sid_000001F5_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_27_sid_00000542_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_27_sid_00000542_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_27_sid_00000542_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_27_sid_00000542_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_27_sid_00000542_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_27_sid_00000542_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_27_sid_00000561_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_27_sid_00000561_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_27_sid_00000561_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_27_sid_00000561_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_27_sid_00000561_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_27_sid_00000561_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_27_sid_0000076B_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_27_sid_0000076B_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_27_sid_0000076B_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_28_sid_0000009D_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_28_sid_0000009D_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_28_sid_0000009D_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_28_sid_000001F8_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_28_sid_000001F8_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_28_sid_000001F8_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_28_sid_000001F8_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_28_sid_000001F8_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_28_sid_000001F8_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_28_sid_0000053A_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_28_sid_0000053A_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_28_sid_0000053A_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_28_sid_00000560_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_28_sid_00000560_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_28_sid_00000560_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_28_sid_00000776_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_28_sid_00000776_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_28_sid_00000776_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_28_sid_0000230D_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_28_sid_0000230D_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_28_sid_0000230D_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_29_sid_000001F6_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_29_sid_000001F6_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_29_sid_000001F6_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_29_sid_00000544_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_29_sid_00000544_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_29_sid_00000544_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_29_sid_00000544_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_29_sid_00000544_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_29_sid_00000544_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_29_sid_00000544_3_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_29_sid_00000544_3_Group');
            $data = DB::connection('simpeg')->table('#Tableau_29_sid_00000544_3_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_29_sid_0000055D_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_29_sid_0000055D_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_29_sid_0000055D_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_29_sid_0000076F_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_29_sid_0000076F_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_29_sid_0000076F_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_30_sid_00000541_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_30_sid_00000541_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_30_sid_00000541_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_30_sid_00000541_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_30_sid_00000541_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_30_sid_00000541_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_30_sid_0000055C_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_30_sid_0000055C_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_30_sid_0000055C_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_30_sid_00000770_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_30_sid_00000770_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_30_sid_00000770_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_30_sid_00000770_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_30_sid_00000770_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_30_sid_00000770_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_31_sid_0000053F_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_31_sid_0000053F_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_31_sid_0000053F_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_31_sid_0000053F_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_31_sid_0000053F_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_31_sid_0000053F_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_37_sid_00000203_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_37_sid_00000203_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_37_sid_00000203_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_37_sid_00000203_5_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_37_sid_00000203_5_Group');
            $data = DB::connection('simpeg')->table('#Tableau_37_sid_00000203_5_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_38_sid_00000204_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_38_sid_00000204_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_38_sid_00000204_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_38_sid_00000204_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_38_sid_00000204_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_38_sid_00000204_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_39_sid_00000206_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_39_sid_00000206_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_39_sid_00000206_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_39_sid_00000206_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_39_sid_00000206_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_39_sid_00000206_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_40_sid_00000205_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_40_sid_00000205_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_40_sid_00000205_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_40_sid_00000205_2_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_40_sid_00000205_2_Group');
            $data = DB::connection('simpeg')->table('#Tableau_40_sid_00000205_2_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_41_sid_00000207_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_41_sid_00000207_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_41_sid_00000207_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_42_sid_00000208_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_42_sid_00000208_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_42_sid_00000208_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_5_sid_0000005B_3_Connect_CheckCreateTempTableCap'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_5_sid_0000005B_3_Connect_CheckCreateTempTableCap');
            $data = DB::connection('simpeg')->table('#Tableau_5_sid_0000005B_3_Connect_CheckCreateTempTableCap')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_6_sid_00000192_4_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_6_sid_00000192_4_Group');
            $data = DB::connection('simpeg')->table('#Tableau_6_sid_00000192_4_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_8_sid_00000193_1_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_8_sid_00000193_1_Group');
            $data = DB::connection('simpeg')->table('#Tableau_8_sid_00000193_1_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_8_sid_00000441_10_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_8_sid_00000441_10_Group');
            $data = DB::connection('simpeg')->table('#Tableau_8_sid_00000441_10_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_8_sid_00000441_8_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_8_sid_00000441_8_Group');
            $data = DB::connection('simpeg')->table('#Tableau_8_sid_00000441_8_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
        }elseif($jenis == '#Tableau_8_sid_00000441_9_Group'){
            $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('#Tableau_8_sid_00000441_9_Group');
            $data = DB::connection('simpeg')->table('#Tableau_8_sid_00000441_9_Group')->get();
            return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' riwayat_pendidikan'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('riwayat_pendidikan');
        $data = DB::connection('simpeg')->table('riwayat_pendidikan')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' t_pns'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('t_pns');
        $data = DB::connection('simpeg')->table('t_pns')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_angka_kredit'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_angka_kredit');
        $data = DB::connection('simpeg')->table('ta_angka_kredit')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_bagian'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_bagian');
        $data = DB::connection('simpeg')->table('ta_bagian')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_bahasa'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_bahasa');
        $data = DB::connection('simpeg')->table('ta_bahasa')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_cabang'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_cabang');
        $data = DB::connection('simpeg')->table('ta_cabang')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_cpns'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_cpns');
        $data = DB::connection('simpeg')->table('ta_cpns')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_departemen'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_departemen');
        $data = DB::connection('simpeg')->table('ta_departemen')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_diklat_eselon'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_diklat_eselon');
        $data = DB::connection('simpeg')->table('ta_diklat_eselon')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_diklat_fungsional'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_diklat_fungsional');
        $data = DB::connection('simpeg')->table('ta_diklat_fungsional')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_diklat_struktural'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_diklat_struktural');
        $data = DB::connection('simpeg')->table('ta_diklat_struktural')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_diklat_teknis'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_diklat_teknis');
        $data = DB::connection('simpeg')->table('ta_diklat_teknis')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_golongan'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_golongan');
        $data = DB::connection('simpeg')->table('ta_golongan')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_jabatan'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_jabatan');
        $data = DB::connection('simpeg')->table('ta_jabatan')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_jasa'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_jasa');
        $data = DB::connection('simpeg')->table('ta_jasa')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_jenis_jabatan'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_jenis_jabatan');
        $data = DB::connection('simpeg')->table('ta_jenis_jabatan')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_jenis_jasa'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_jenis_jasa');
        $data = DB::connection('simpeg')->table('ta_jenis_jasa')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_jenis_kenaikan_pangkat'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_jenis_kenaikan_pangkat');
        $data = DB::connection('simpeg')->table('ta_jenis_kenaikan_pangkat')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_jurusan'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_jurusan');
        $data = DB::connection('simpeg')->table('ta_jurusan')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_karyawan'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_karyawan');
        $data = DB::connection('simpeg')->table('ta_karyawan')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_kedudukan_pegawai'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_kedudukan_pegawai');
        $data = DB::connection('simpeg')->table('ta_kedudukan_pegawai')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_pendidikan'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_pendidikan');
        $data = DB::connection('simpeg')->table('ta_pendidikan')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_penilaian'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_penilaian');
        $data = DB::connection('simpeg')->table('ta_penilaian')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_riwayat_diklat_fungsional'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_riwayat_diklat_fungsional');
        $data = DB::connection('simpeg')->table('ta_riwayat_diklat_fungsional')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_riwayat_diklat_struktural'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_riwayat_diklat_struktural');
        $data = DB::connection('simpeg')->table('ta_riwayat_diklat_struktural')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_riwayat_diklat_teknis'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_riwayat_diklat_teknis');
        $data = DB::connection('simpeg')->table('ta_riwayat_diklat_teknis')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_riwayat_seminar'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_riwayat_seminar');
        $data = DB::connection('simpeg')->table('ta_riwayat_seminar')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_sklain'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_sklain');
        $data = DB::connection('simpeg')->table('ta_sklain')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_skp'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_skp');
        $data = DB::connection('simpeg')->table('ta_skp')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_status_pegawai'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_status_pegawai');
        $data = DB::connection('simpeg')->table('ta_status_pegawai')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_stlud'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_stlud');
        $data = DB::connection('simpeg')->table('ta_stlud')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_subbagian'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_subbagian');
        $data = DB::connection('simpeg')->table('ta_subbagian')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_tgs_luar_negri'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_tgs_luar_negri');
        $data = DB::connection('simpeg')->table('ta_tgs_luar_negri')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_tim_kerja'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_tim_kerja');
        $data = DB::connection('simpeg')->table('ta_tim_kerja')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }elseif($jenis == ' ta_unit'){
        $result = DB::connection('simpeg')->getSchemaBuilder()->getColumnListing('ta_unit');
        $data = DB::connection('simpeg')->table('ta_unit')->get();
        return response()->json(['header' => $result, 'data' => $data], 200);
       }
    }elseif ($name == 'kominfo_staging') {
        if ($jenis == '#Tableau_48_sid_00007B36_4_Group') {
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('#Tableau_48_sid_00007B36_4_Group');
            $data = DB::connection('staging')->table('#Tableau_48_sid_00007B36_4_Group')->get();
            return response()->json(['header' => $result,'data' => $data], 200);
        }elseif($jenis == '#Tableau_48_sid_00007B36_4_Group'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('#Tableau_48_sid_00007B36_4_Group');
            $data = DB::connection('staging')->table('#Tableau_48_sid_00007B36_4_Group')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == '#Tableau_69_sid_00007B3E_1_Group'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('#Tableau_69_sid_00007B3E_1_Group');
            $data = DB::connection('staging')->table('#Tableau_69_sid_00007B3E_1_Group')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'data_mon_hf'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('data_mon_hf');
            $data = DB::connection('staging')->table('data_mon_hf')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'data_sertifikasi'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('data_sertifikasi');
            $data = DB::connection('staging')->table('data_sertifikasi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_angkatan_kerja_jenis_kelamin'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_angkatan_kerja_jenis_kelamin');
            $data = DB::connection('staging')->table('disnaker_angkatan_kerja_jenis_kelamin')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_angkatan_kerja_pendidikan'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_angkatan_kerja_pendidikan');
            $data = DB::connection('staging')->table('disnaker_angkatan_kerja_pendidikan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_angkatan_kerja_umur'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_angkatan_kerja_umur');
            $data = DB::connection('staging')->table('disnaker_angkatan_kerja_umur')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_angkatan_kerja_wilayah'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_angkatan_kerja_wilayah');
            $data = DB::connection('staging')->table('disnaker_angkatan_kerja_wilayah')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_kelamin'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_kelamin');
            $data = DB::connection('staging')->table('disnaker_kelamin')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_migran'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_migran');
            $data = DB::connection('staging')->table('disnaker_migran')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_migran_asal'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_migran_asal');
            $data = DB::connection('staging')->table('disnaker_migran_asal')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_migran_asal_tujuan'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_migran_asal_tujuan');
            $data = DB::connection('staging')->table('disnaker_migran_asal_tujuan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_migran_tujuan'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_migran_tujuan');
            $data = DB::connection('staging')->table('disnaker_migran_tujuan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_pendidikan'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_pendidikan');
            $data = DB::connection('staging')->table('disnaker_pendidikan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_pengangguran_jenis_kelamin'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_pengangguran_jenis_kelamin');
            $data = DB::connection('staging')->table('disnaker_pengangguran_jenis_kelamin')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_pengangguran_pendidikan'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_pengangguran_pendidikan');
            $data = DB::connection('staging')->table('disnaker_pengangguran_pendidikan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_pengangguran_umur'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_pengangguran_umur');
            $data = DB::connection('staging')->table('disnaker_pengangguran_umur')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_pengangguran_wilayah'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_pengangguran_wilayah');
            $data = DB::connection('staging')->table('disnaker_pengangguran_wilayah')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_umur'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_umur');
            $data = DB::connection('staging')->table('disnaker_umur')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'disnaker_wilayah'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('disnaker_wilayah');
            $data = DB::connection('staging')->table('disnaker_wilayah')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'elapor_kabupaten'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('elapor_kabupaten');
            $data = DB::connection('staging')->table('elapor_kabupaten')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'elapor_kategori'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('elapor_kategori');
            $data = DB::connection('staging')->table('elapor_kategori')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'elapor_koordinat'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('elapor_koordinat');
            $data = DB::connection('staging')->table('elapor_koordinat')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'elapor_listskpd'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('elapor_listskpd');
            $data = DB::connection('staging')->table('elapor_listskpd')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'event_penting'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('event_penting');
            $data = DB::connection('staging')->table('event_penting')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'frekuensi_terbanyak'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('frekuensi_terbanyak');
            $data = DB::connection('staging')->table('frekuensi_terbanyak')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'hasil_monitor'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('hasil_monitor');
            $data = DB::connection('staging')->table('hasil_monitor')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'hs_telekomunikasi'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('hs_telekomunikasi');
            $data = DB::connection('staging')->table('hs_telekomunikasi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'koperasi_jenis'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('koperasi_jenis');
            $data = DB::connection('staging')->table('koperasi_jenis')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'koperasi_kelompok'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('koperasi_kelompok');
            $data = DB::connection('staging')->table('koperasi_kelompok')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'koperasi_publik'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('koperasi_publik');
            $data = DB::connection('staging')->table('koperasi_publik')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'mon_hf'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('mon_hf');
            $data = DB::connection('staging')->table('mon_hf')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'pdb'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('pdb');
            $data = DB::connection('staging')->table('pdb')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'penggunaan_frekuensi'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('penggunaan_frekuensi');
            $data = DB::connection('staging')->table('penggunaan_frekuensi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'penggunaan_frekuensi_2'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('penggunaan_frekuensi_2');
            $data = DB::connection('staging')->table('penggunaan_frekuensi_2')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'peraturan_sdppi'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('peraturan_sdppi');
            $data = DB::connection('staging')->table('peraturan_sdppi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'periode_tahunan_bwa'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('periode_tahunan_bwa');
            $data = DB::connection('staging')->table('periode_tahunan_bwa')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'perjanjian_sdppi'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('perjanjian_sdppi');
            $data = DB::connection('staging')->table('perjanjian_sdppi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'pertumbuhan_pdb'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('pertumbuhan_pdb');
            $data = DB::connection('staging')->table('pertumbuhan_pdb')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'pita_frekuensi_by_tahun'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('pita_frekuensi_by_tahun');
            $data = DB::connection('staging')->table('pita_frekuensi_by_tahun')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'refarming'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('refarming');
            $data = DB::connection('staging')->table('refarming')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'rekap_frekuensi_by_tahun'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('rekap_frekuensi_by_tahun');
            $data = DB::connection('staging')->table('rekap_frekuensi_by_tahun')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ringkasan_apbn'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ringkasan_apbn');
            $data = DB::connection('staging')->table('ringkasan_apbn')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sianti'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sianti');
            $data = DB::connection('staging')->table('sianti')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sibakul_cctv'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sibakul_cctv');
            $data = DB::connection('staging')->table('sibakul_cctv')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sibakul_publik'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sibakul_publik');
            $data = DB::connection('staging')->table('sibakul_publik')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sibakul_survilance'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sibakul_survilance');
            $data = DB::connection('staging')->table('sibakul_survilance')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sibakul_survilance_bantul'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sibakul_survilance_bantul');
            $data = DB::connection('staging')->table('sibakul_survilance_bantul')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sibakul_survilance_kominfosleman'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sibakul_survilance_kominfosleman');
            $data = DB::connection('staging')->table('sibakul_survilance_kominfosleman')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sibakul_survilance_kota'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sibakul_survilance_kota');
            $data = DB::connection('staging')->table('sibakul_survilance_kota')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sibakul_survilance_kp'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sibakul_survilance_kp');
            $data = DB::connection('staging')->table('sibakul_survilance_kp')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sibakul_survilance_malioboro'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sibakul_survilance_malioboro');
            $data = DB::connection('staging')->table('sibakul_survilance_malioboro')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sibakul_survilance_sleman'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sibakul_survilance_sleman');
            $data = DB::connection('staging')->table('sibakul_survilance_sleman')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sibakul_survilance_sungai'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sibakul_survilance_sungai');
            $data = DB::connection('staging')->table('sibakul_survilance_sungai')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sibakul_survilance_uptmalioboro'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('sibakul_survilance_uptmalioboro');
            $data = DB::connection('staging')->table('sibakul_survilance_uptmalioboro')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'smfr'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('smfr');
            $data = DB::connection('staging')->table('smfr')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'stasiun_hf'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('stasiun_hf');
            $data = DB::connection('staging')->table('stasiun_hf')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'tibnas_dan_rol'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('tibnas_dan_rol');
            $data = DB::connection('staging')->table('tibnas_dan_rol')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_disabilitas'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_disabilitas');
            $data = DB::connection('staging')->table('ukm_disabilitas')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_jenis_kelamin'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_jenis_kelamin');
            $data = DB::connection('staging')->table('ukm_jenis_kelamin')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_kabupaten'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_kabupaten');
            $data = DB::connection('staging')->table('ukm_kabupaten')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_kelas'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_kelas');
            $data = DB::connection('staging')->table('ukm_kelas')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_klasifikasi'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_klasifikasi');
            $data = DB::connection('staging')->table('ukm_klasifikasi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_laporan_dua'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_laporan_dua');
            $data = DB::connection('staging')->table('ukm_laporan_dua')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_laporan_empat'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_laporan_empat');
            $data = DB::connection('staging')->table('ukm_laporan_empat')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_laporan_enam'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_laporan_enam');
            $data = DB::connection('staging')->table('ukm_laporan_enam')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_laporan_lima'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_laporan_lima');
            $data = DB::connection('staging')->table('ukm_laporan_lima')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_laporan_satu'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_laporan_satu');
            $data = DB::connection('staging')->table('ukm_laporan_satu')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_laporan_tiga'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_laporan_tiga');
            $data = DB::connection('staging')->table('ukm_laporan_tiga')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_pendidikan'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_pendidikan');
            $data = DB::connection('staging')->table('ukm_pendidikan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_sektor_ekraf'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_sektor_ekraf');
            $data = DB::connection('staging')->table('ukm_sektor_ekraf')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'ukm_sektor_group'){
            $result = DB::connection('staging')->getSchemaBuilder()->getColumnListing('ukm_sektor_group');
            $data = DB::connection('staging')->table('ukm_sektor_group')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }
    }elseif ($name == 'kominfo_staging2') {
        if($jenis == 'alat_perangkat'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('alat_perangkat');
            $data = DB::connection('staging_dua')->table('alat_perangkat')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'balai_uji_tetap'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('balai_uji_tetap');
            $data = DB::connection('staging_dua')->table('balai_uji_tetap')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'cakupan_smfr'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('cakupan_smfr');
            $data = DB::connection('staging_dua')->table('cakupan_smfr')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'capaian_spektrum'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('capaian_spektrum');
            $data = DB::connection('staging_dua')->table('capaian_spektrum')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'data_imei'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('data_imei');
            $data = DB::connection('staging_dua')->table('data_imei')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'data_labuh'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('data_labuh');
            $data = DB::connection('staging_dua')->table('data_labuh')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'data_lokai_penempatan'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('data_lokai_penempatan');
            $data = DB::connection('staging_dua')->table('data_lokai_penempatan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'dmp_sfr'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('dmp_sfr');
            $data = DB::connection('staging_dua')->table('dmp_sfr')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'hasil_mon_sfr'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('hasil_mon_sfr');
            $data = DB::connection('staging_dua')->table('hasil_mon_sfr')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'hs_telekomunikasi_new'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('hs_telekomunikasi_new');
            $data = DB::connection('staging_dua')->table('hs_telekomunikasi_new')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'isr_smntara'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('isr_smntara');
            $data = DB::connection('staging_dua')->table('isr_smntara')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'jumlah_alat_ukur'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('jumlah_alat_ukur');
            $data = DB::connection('staging_dua')->table('jumlah_alat_ukur')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'jumlah_sdppi'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('jumlah_sdppi');
            $data = DB::connection('staging_dua')->table('jumlah_sdppi')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'lhu_tiap_balai'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('lhu_tiap_balai');
            $data = DB::connection('staging_dua')->table('lhu_tiap_balai')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'mon_sfr_perpanas'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('mon_sfr_perpanas');
            $data = DB::connection('staging_dua')->table('mon_sfr_perpanas')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'nilai_bhr'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('nilai_bhr');
            $data = DB::connection('staging_dua')->table('nilai_bhr')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'opening_perangkat'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('opening_perangkat');
            $data = DB::connection('staging_dua')->table('opening_perangkat')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'pengakuan_laboraturium'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('pengakuan_laboraturium');
            $data = DB::connection('staging_dua')->table('pengakuan_laboraturium')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'penyeselaian_pegujian'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('penyeselaian_pegujian');
            $data = DB::connection('staging_dua')->table('penyeselaian_pegujian')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'perangkat_digunakan'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('perangkat_digunakan');
            $data = DB::connection('staging_dua')->table('perangkat_digunakan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'perangkat_pertandingan'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('perangkat_pertandingan');
            $data = DB::connection('staging_dua')->table('perangkat_pertandingan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'perangkat_wsbk&perpanas'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('perangkat_wsbk&perpanas');
            $data = DB::connection('staging_dua')->table('perangkat_wsbk&perpanas')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'perkembangan_pnbp'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('perkembangan_pnbp');
            $data = DB::connection('staging_dua')->table('perkembangan_pnbp')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'personil_perangkat_open'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('personil_perangkat_open');
            $data = DB::connection('staging_dua')->table('personil_perangkat_open')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'rekap_system_smfr'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('rekap_system_smfr');
            $data = DB::connection('staging_dua')->table('rekap_system_smfr')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sebaran_penggunaan'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('sebaran_penggunaan');
            $data = DB::connection('staging_dua')->table('sebaran_penggunaan')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sebaran_penggunaan_smfr'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('sebaran_penggunaan_smfr');
            $data = DB::connection('staging_dua')->table('sebaran_penggunaan_smfr')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'sfr_broadcast'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('sfr_broadcast');
            $data = DB::connection('staging_dua')->table('sfr_broadcast')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'target_penambahan_spektrum'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('target_penambahan_spektrum');
            $data = DB::connection('staging_dua')->table('target_penambahan_spektrum')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }elseif($jenis == 'upt_personil_wsbk_perpanas'){
            $result = DB::connection('staging_dua')->getSchemaBuilder()->getColumnListing('upt_personil_wsbk_perpanas');
            $data = DB::connection('staging_dua')->table('upt_personil_wsbk_perpanas')->get();
            return response()->json(['header' => $result,'data' => $data],200);
        }
    }else{
        return response()->json([
                                'message' => 'Terjadi kesalahan.',
        ],403);
    }
}
