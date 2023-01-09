<?php
    function delete($name, $jenis, $id, $data_param)
    {
        switch ($name) {
            case 'kominfo_ditops':
            if ($jenis == 'bts_ipfr'){
                $data = DB::connection('ditops')->table($jenis)->where('teknologi',$id)->where('tahun',$data_param)->delete();
                return $data;
            }elseif($jenis == 'data_ipfr') {
                $data = DB::connection('ditops')->table($jenis)->where('pita',$id)->where('range',$data_param)->delete();
                return $data;
            }elseif($jenis == 'data_labuh') {
                $data = DB::connection('ditops')->table($jenis)->where('administrasi',$id)->where('tahun',$data_param)->delete();
                return $data;
            }elseif($jenis == 'data_pnbp') {
                $data = DB::connection('ditops')->table($jenis)->where('jenis',$id)->where('tahun',$data_param)->delete();
                return $data;
            }elseif($jenis == 'iar') {
                $data = DB::connection('ditops')->table($jenis)->where('provinsi',$id)->where('tahun',$data_param)->delete();
                return $data;
            }elseif($jenis == 'ikrap') {
                $data = DB::connection('ditops')->table($jenis)->where('provinsi',$id)->where('tahun',$data_param)->delete();
                return $data;
            }elseif($jenis == 'pengunjung_ppt') {
                $data = DB::connection('ditops')->table($jenis)->where('bulan',$id)->where('kategori',$data_param)->delete();
                return $data;
            }elseif($jenis == 'radio_dinas_maritim_penerbangan') {
                $data = DB::connection('ditops')->table($jenis)->where('ids',$id)->where('name',$data_param)->delete();
                return $data;
            }elseif($jenis == 'radio_komunikasi') {
                $data = DB::connection('ditops')->table($jenis)->where('ids',$id)->where('name',$data_param)->delete();
                return $data;
            }elseif($jenis == 'radio_station_frekuensi') {
                $data = DB::connection('ditops')->table($jenis)->where('ids',$id)->where('name',$data_param)->delete();
                return $data;
            }elseif($jenis == 'radio_station_jenis_penggunaan_frekuensi') {
                $data = DB::connection('ditops')->table($jenis)->where('ids',$id)->where('name',$data_param)->delete();
                return $data;
            }elseif($jenis == 'radio_station_penggunaan_frekuensi') {
                $data = DB::connection('ditops')->table($jenis)->where('name',$id)->where('sub_menu',$data_param)->delete();
                return $data;
            }elseif($jenis == 'radio_station_pita_frekuensi') {
                $data = DB::connection('ditops')->table($jenis)->where('idb',$id)->where('name',$data_param)->delete();
                return $data;
            }elseif($jenis == 'reor') {
                $data = DB::connection('ditops')->table($jenis)->where('kota',$id)->where('tahun',$data_param)->delete();
                return $data;
            }elseif($jenis == 'respon_call') {
                $data = DB::connection('ditops')->table($jenis)->where('bulan',$id)->where('kategori',$data_param)->delete();
                return $data;
            }elseif($jenis == 'sertifikasi_kecakapan') {
                $data = DB::connection('ditops')->table($jenis)->where('provinsi',$id)->where('tahun',$data_param)->delete();
                return $data;
            }elseif($jenis == 'sertifikat_reor') {
                $data = DB::connection('ditops')->table($jenis)->where('jenis',$id)->where('tahun',$data_param)->delete();
                return $data;
            }elseif($jenis == 'statistik_tiket') {
                $data = DB::connection('ditops')->table($jenis)->where('bulan',$id)->where('kategori',$data_param)->delete();
                return $data;
            }
            break;
            case 'kominfo_edupak':
                if($jenis == 'tbl_butir') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_butir',$id)->where('id_sub_unsur',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'tbl_dupak') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_dupak',$id)->where('nip',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'tbl_file_spmlk') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_file',$id)->where('id_dupak',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'tbl_satuan') {
                    $data = DB::connection('edupak')->table($jenis)->where('kd_satuan',$id)->where('nm_satuan',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'tbl_sub_unsur') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_sub_unsur',$id)->where('id_unsur',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'tbl_unsur') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_unsur',$id)->where('id_type',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'tbl_user') {
                    $data = DB::connection('edupak')->table($jenis)->where('id_user',$id)->where('nip',$data_param)->delete();
                    return $data;
                }
            break;
            case 'kominfo_filing':
            if($jenis == 'adm_assoc'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('adm',$data_param)->delete();
                }elseif($jenis == 'all_aff_ntw'){
                    $data = DB::connection('filing')->table($jenis)->where('aff_rec_id',$id)->where('aff_ntc_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'alloc_id'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_year',$id)->where('grp_id_last',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ant_type'){
                    $data = DB::connection('filing')->table($jenis)->where('pattern_id',$id)->where('f_ant_type',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ap30b_ref_agg'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id_dn',$id)->where('grp_id_up',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ap30b_ref_se'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id_a',$id)->where('grp_id_i',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ap30b_tr_res'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('freq_band',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'assgn'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'attch'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('attch_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'beam_tr'){
                    $data = DB::connection('filing')->table($jenis)->where('ant_diam',$id)->where('pattern_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'c_pfd'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'carrier_fr'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_emiss',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'cmr_grp_lnk'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('seq_cmr',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'cmr_history'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('itu_scraft_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'cmr_notice'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('itu_scraft_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'cmr_syst'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'com_el'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('prov',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'coord_agree_ntw'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('coord_prov',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'cost_recov'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_gpub',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'diag_grp'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('diag_type',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'e_ant'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('emi_rcp',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'e_ant_elev'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('azm',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'e_as_stn'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'e_srvcls'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_e_as',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'e_stn'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('stn_name',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'emiss'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ex_op_grp'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('beamgrp_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'fdg_ref'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'freq'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('emi_rcp',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'geo'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('sat_name',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'gpub'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'grp'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('ntc_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'grp_aff_rec'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('aff_rec_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'grp_lnk'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('lnk_grp_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'history'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'hor_elev'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('azm',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'link_epm'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_e_as',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'mask_info'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('mask_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'mask_lnk1'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'mask_lnk2'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'mod_char'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_emiss',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ngma'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('ngma_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'non_geo'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('sat_name',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'notice'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('prov',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ntc_commit'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('commit_type',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ntc_lnk'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('lnk_ntc_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ntc_lnk_ref'){
                    $data = DB::connection('filing')->table($jenis)->where('plan_id',$id)->where('ntc_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ntc_memo'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('adm_remark',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'orbit'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('orb_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'orbit_lnk'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('emi_rcp',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ovrl_epm'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id_up',$id)->where('grp_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'phase'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('orb_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'pl_strap'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('freq_dn',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'plan_pub'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('wic_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'provn'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('coord_prov',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'pub_ssn'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'pwr_ctrl'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_assgn',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'res49_sel'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('sat_name',$data_param)->delete();
                    return $data;
                }elseif($jenis == 's_as_stn'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('sat_name',$data_param)->delete();
                    return $data;
                }elseif($jenis == 's_beam'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('emi_rcp',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'sat_lnk'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('emi_rcp',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'sat_oper'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('lat_fr',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'sat_sys_provn'){
                    $data = DB::connection('filing')->table($jenis)->where('plan_id',$id)->where('ntwk_pack',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'scraft_cmr_freq'){
                    $data = DB::connection('filing')->table($jenis)->where('itu_scraft_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'scraft_cmr_syst'){
                    $data = DB::connection('filing')->table($jenis)->where('itu_scraft_id',$id)->where('ntwk_name',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'sps_results'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('ntwk_pack',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'srs_ooak'){
                    $data = DB::connection('filing')->table($jenis)->where('version_no',$id)->where('version_no_sub',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'srv_area'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('ctry',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'srv_cls'){
                    $data = DB::connection('filing')->table($jenis)->where('grp_id',$id)->where('seq_no',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'strap'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('strp_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'tr_aff_ntw'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('coord_prov',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'tr_provn'){
                    $data = DB::connection('filing')->table($jenis)->where('ntc_id',$id)->where('coord_prov',$data_param)->delete();
                    return $data;
                }
            break;
            case 'kominfo_pnbp':
                if ($jenis == 'pnbp_1') {
                    $data = DB::connection('pnbp')->table($jenis)->where('jenis_pnbp',$id)->where('blu_or_not',$data_param)->delete();
                    return $data;
                }elseif ($jenis == 'pnbp_2') {
                    $data = DB::connection('pnbp')->table($jenis)->where('jenis_pnbp',$id)->where('target',$data_param)->delete();
                    return $data;
                }
            break;
            case 'kominfo_siap':
                if($jenis == 'ta_absen'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tgl_masuk',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_angka_kredit'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_bagian'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_bagian',$id)->where('nama_bagian',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_cabang'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_cabang',$id)->where('nama_cabang',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_eselon'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_eselon',$id)->where('nama_eselon',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_grade'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_grade',$id)->where('nilai_grade',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_hukuman_disiplin'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tgl_awal',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_ijin'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_ijin',$id)->where('ket_ijin',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_ijin_berlapis'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_ijin',$id)->where('kode_ijin_lapisan',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_ijin_hari'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tgl_awal',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_ijin_jam'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tgl_ijin',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_jabatan'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_jabatan',$id)->where('nama_jabatan',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_karyawan'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('pin',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_lembur'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tgl_spl',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_libur'){
                    $data = DB::connection('siap')->table($jenis)->where('tgl_libur',$id)->where('ket_libur',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_libur_regional'){
                    $data = DB::connection('siap')->table($jenis)->where('tgl_libur',$id)->where('kode_cabang',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_nomenklatur'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_nomenklatur',$id)->where('nama_nomenklatur',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_otoritas_departemen'){
                    $data = DB::connection('siap')->table($jenis)->where('username',$id)->where('kode_departemen',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_pnbp'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tahun',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_pola'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_shift',$id)->where('tgl_mulai',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_pph'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('tahun',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_ptkp'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_kawin',$id)->where('batas_ptpkp',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_range'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_range',$id)->where('kode_absen',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_range_detail'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_range',$id)->where('kode_departemen',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_riwayat_karyawan'){
                    $data = DB::connection('siap')->table($jenis)->where('nip',$id)->where('bulan',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_status_pegawai'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_status',$id)->where('nama_status',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_subbagian'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_subbagian',$id)->where('nama_subbagian',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ta_unit'){
                    $data = DB::connection('siap')->table($jenis)->where('kode_unit',$id)->where('nama_unit',$data_param)->delete();
                    return $data;
                }
            break;
            case 'kominfo_siemon':
                if($jenis == 'lap_monev_perangkat_online'){
                    $data = DB::connection('siap')->table($jenis)->where('jenis',$id)->where('sertifikat',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'rekap_lap_mon_perangkat_upt'){
                    $data = DB::connection('siap')->table($jenis)->where('upt',$id)->where('pelaksanaan',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'rekap_lap_montib_perangkat_upt'){
                    $data = DB::connection('siap')->table($jenis)->where('upt',$id)->where('jumlah_pelaksanaan_monitoring',$data_param)->delete();
                    return $data;
                }
            break;
            case 'kominfo_simpeg':
                if($jenis == 'riwayat_pendidikan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tahun_lulus',$data_param)->delete();
                    return $data;
                }elseif($jenis == 't_pns'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('nomor_sk_pns',$data_param)->delete();
                }elseif($jenis == 'ta_angka_kredit'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_penetapan',$data_param)->delete();
                }elseif($jenis == 'ta_bagian'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_bagian',$id)->where('nama_bagian',$data_param)->delete();
                }elseif($jenis == 'ta_bahasa'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('nama_bahasa',$data_param)->delete();
                }elseif($jenis == 'ta_cabang'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_cabang',$id)->where('nama_cabang',$data_param)->delete();
                }elseif($jenis == 'ta_cpns'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('nomor_nota_pers_bkn',$data_param)->delete();
                }elseif($jenis == 'ta_departemen'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_departemen',$id)->where('nama_departemen',$data_param)->delete();
                }elseif($jenis == 'ta_diklat_eselon'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_eselon',$id)->where('tunjangan_eselon',$data_param)->delete();
                }elseif($jenis == 'ta_diklat_fungsional'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_diklat_fungsional',$id)->where('nama_diklat_fungsional',$data_param)->delete();
                }elseif($jenis == 'ta_diklat_struktural'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_diklat_struktural',$id)->where('nama_diklat_struktural',$data_param)->delete();
                }elseif($jenis == 'ta_diklat_teknis'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_diklat_teknis',$id)->where('nama_diklat_teknis',$data_param)->delete();
                }elseif($jenis == 'ta_golongan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_golongan',$id)->where('nama_golongan',$data_param)->delete();
                }elseif($jenis == 'ta_jabatan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_jabatan',$id)->where('nama_jabatan',$data_param)->delete();
                }elseif($jenis == 'ta_jasa'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('id_jasa',$id)->where('nip',$data_param)->delete();
                }elseif($jenis == 'ta_jenis_jabatan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_jenis_jabatan',$id)->where('nama_jenis_jabatan',$data_param)->delete();
                }elseif($jenis == 'ta_jenis_jasa'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_jenis_jasa',$id)->where('nama_tanda_jasa',$data_param)->delete();
                }elseif($jenis == 'ta_jenis_kenaikan_pangkat'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_jenis_kenaikan_pangkat',$id)->where('nama_jenis_kenaikan',$data_param)->delete();
                }elseif($jenis == 'ta_jurusan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_jurusan',$id)->where('nama',$data_param)->delete();
                }elseif($jenis == 'ta_karyawan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('kode_departemen',$data_param)->delete();
                }elseif($jenis == 'ta_kedudukan_pegawai'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_kedudukan_pegawai',$id)->where('nama',$data_param)->delete();
                }elseif($jenis == 'ta_pendidikan'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_pendidikan',$id)->where('nama',$data_param)->delete();
                }elseif($jenis == 'ta_penilaian'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_nilai',$data_param)->delete();
                }elseif($jenis == 'ta_riwayat_diklat_fungsional'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_mulai',$data_param)->delete();
                }elseif($jenis == 'ta_riwayat_diklat_struktural'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_mulai',$data_param)->delete();
                }elseif($jenis == 'ta_riwayat_diklat_teknis'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_mulai',$data_param)->delete();
                }elseif($jenis == 'ta_riwayat_seminar'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tgl_mulai',$data_param)->delete();
                }elseif($jenis == 'ta_sklain'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('id_sklain',$id)->where('nip',$data_param)->delete();
                }elseif($jenis == 'ta_skp'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('nip',$id)->where('tahun',$data_param)->delete();
                }elseif($jenis == 'ta_status_pegawai'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_status',$id)->where('nama_status',$data_param)->delete();
                }elseif($jenis == 'ta_stlud'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_status',$id)->where('keterangan',$data_param)->delete();
                }elseif($jenis == 'ta_subbagian'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode_status',$id)->where('nama_subbagian',$data_param)->delete();
                }elseif($jenis == 'ta_tgs_luar_negri'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('id_tugas',$id)->where('nip',$data_param)->delete();
                }elseif($jenis == 'ta_tim_kerja'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode',$id)->where('nama',$data_param)->delete();
                }elseif($jenis == 'ta_unit'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('kode',$id)->where('nama',$data_param)->delete();
                }elseif($jenis == 'ta_unit_2'){
                    $data = DB::connection('kominfo_siemon')->table($jenis)->where('aktif',$id)->where('nama_unit',$data_param)->delete();
                }
            break;
            case 'kominfo_staging':
                if ($jenis = '#Tableau_18_sid_00005616_1_Group') {
                    $data = DB::connection('staging')->table($jenis)->where('Jenis Permohonan (group)',$id)->where('jenis_permohonan',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'data_mon_hf'){
                    $data = DB::connection('staging')->table($jenis)->where('stasiun_monitoring',$id)->where('tahun',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'data_sertifikasi'){
                    $data = DB::connection('staging')->table($jenis)->where('id',$id)->where('plg_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'event_penting'){
                    $data = DB::connection('staging')->table($jenis)->where('id',$id)->where('pita_frekuensi',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'frekuensi_terbanyak'){
                    $data = DB::connection('staging')->table($jenis)->where('dinas',$id)->where('total',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'hasil_monitor'){
                    $data = DB::connection('staging')->table($jenis)->where('dinas',$id)->where('sub_service',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'hs_telekomunikasi'){
                    $data = DB::connection('staging')->table($jenis)->where('tahun',$id)->where('kode_hs',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'mon_hf'){
                    $data = DB::connection('staging')->table($jenis)->where('administrasi',$id)->where('kode',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'penggunaan_frekuensi'){
                    $data = DB::connection('staging')->table($jenis)->where('id',$id)->where('client',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'penggunaan_frekuensi_2'){
                    $data = DB::connection('staging')->table($jenis)->where('id',$id)->where('penggunaan',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'peraturan_sdppi'){
                    $data = DB::connection('staging')->table($jenis)->where('nama_peraturan',$id)->where('Peraturan',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'periode_tahunan_bwa'){
                    $data = DB::connection('staging')->table($jenis)->where('pita',$id)->where('operator',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'perjanjian_sdppi'){
                    $data = DB::connection('staging')->table($jenis)->where('nama_perjanjian',$id)->where('perjanjian',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'pita_frekuensi_by_tahun'){
                    $data = DB::connection('staging')->table($jenis)->where('pita',$id)->where('termonitor',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'refarming'){
                    $data = DB::connection('staging')->table($jenis)->where('judul',$id)->where('rentang_pita_sebelum',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'rekap_frekuensi_by_tahun'){
                    $data = DB::connection('staging')->table($jenis)->where('upt',$id)->where('termonitor',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'ringkasan_apbn'){
                    $data = DB::connection('staging')->table($jenis)->where('judul',$id)->where('apbn_2020',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'sianti'){
                    $data = DB::connection('staging')->table($jenis)->where('nama',$id)->where('total',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'smfr'){
                    $data = DB::connection('staging')->table($jenis)->where('index',$id)->where('unit_id',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'stasiun_hf'){
                    $data = DB::connection('staging')->table($jenis)->where('site_name',$id)->where('city',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'tibnas_dan_rol'){
                    $data = DB::connection('staging')->table($jenis)->where('upt',$id)->where('provinsi',$data_param)->delete();
                    return $data;
                }
            break;
            case 'kominfo_staging2':
                if ($jenis == 'alat_perangkat') {
                    $data = DB::connection('staging_dua')->table($jenis)->where('perangkat',$id)->where('jumlah',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'balai_uji_tetap'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('nama',$id)->where('alamat',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'cakupan_smfr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('tahun',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'capaian_spektrum'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('tahun',$id)->where('capaian',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'data_imei'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('data_imei',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'data_labuh'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('administrasi',$id)->where('tahun',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'data_lokai_penempatan'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('cluster',$id)->where('jumlah_venue',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'data_lokasi_penempatan'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('cluster',$id)->where('jenis',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'dmp_sfr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('equipment',$id)->where('penyelenggara',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'hasil_mon_sfr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('jenis',$id)->where('sfr',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'hs_telekomunikasi_new'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('hs_code',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'isr_smntara'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('equipment',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'jumlah_alat_ukur'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('perangkat',$id)->where('jumlah',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'jumlah_sdppi'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('unit',$id)->where('jumlah',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'lhu_tiap_balai'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('balai',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'mon_sfr_perpanas'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('alat',$id)->where('sfr',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'nilai_bhr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('pita_frekuensi',$id)->where('total',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'opening_perangkat'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('no',$id)->where('perarngkat',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'pengakuan_laboraturium'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('dasar_hukum',$id)->where('kelompok',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'penyeselaian_pegujian'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('tahun',$id)->where('jumlah1',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'perangkat_digunakan'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('cluster',$id)->where('jumlah_ver',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'perangkat_pertandingan'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('cluster',$id)->where('jumlah_venue',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'perangkat_wsbk&perpanas'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('perangkat',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'perkembangan_pnbp'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('kementrian_kelembagaan',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'personil_perangkat_open'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('lokasi',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'rekap_system_smfr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('upt',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'sebaran_penggunaan'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('kabupaten',$id)->where('sfr',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'sebaran_penggunaan_smfr'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('COL 1',$id)->where('created_at',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'sfr_broadcast'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('lokasi',$id)->where('sfr',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'target_penambahan_spektrum'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('judul',$id)->where('2020',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'upt_personil_wsbk_perpanas'){
                    $data = DB::connection('staging_dua')->table($jenis)->where('id',$id)->where('unit',$data_param)->delete();
                    return $data;
                }
            break;
            case 'kominfo_staging3':
                if ($jenis == 'capaian_spektrum') {
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('capaian_spektrum',$id)->where('dataset_jumlah_kab_termonitor',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'dataset_jumlah_kab_termonitor'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('operator',$id)->where('pita',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'filing_new'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('filing_satelit',$id)->where('pengelola',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'monitoring_hf_tetap'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('monitoring',$id)->where('2017',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'satelit_filling'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('kegunaan',$id)->where('manufaktur',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'target_penambahan'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('jenis',$id)->where('tahun',$data_param)->delete();
                    return $data;
                }elseif($jenis == 'target_realisasi2'){
                    $data = DB::connection('kominfo_staging3')->table($jenis)->where('kode',$id)->where('jenis_pnbp',$data_param)->delete();
                    return $data;
                }
            break;
            default:
                # code...
                break;
          }
    }
?>
