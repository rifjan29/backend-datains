<?php

use App\Models\MenuStaging;

function setDataStaging($name, $jenis, $data)
{
    #create data from import excel to table databased
    switch ($name) {
        case 'kominfo_ditops':
            if ($jenis == 'bts_ipfr') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('bts_ipfr')->insert(
                        ['teknologi' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'bts' => $data[$i][2]],
                    );
                }
                return $result;
            }elseif ($jenis == 'data_ipfr') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('data_ipfr')->insert(
                        ['pita' => $data[$i][0],
                        'range' => $data[$i][1],
                        'moda' => $data[$i][2],
                        'nama_operator' => $data[$i][3],
                        'jenis' => $data[$i][4],
                        'area' => $data[$i][5]],
                    );
                }
                return $result;
            }elseif ($jenis == 'data_labuh') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('data_labuh')->insert(
                        ['administrasi' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'hak_labuh' => $data[$i][2]],
                    );
                }
                return $result;
            }elseif ($jenis == 'data_pnbp') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('data_pnbp')->insert(
                        ['jenis' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'realisasi' => $data[$i][2]],
                    );
                }
                return $result;
            }elseif ($jenis == 'iar') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('iar')->insert(
                        ['provinsi' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'iar' => $data[$i][2]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ikrap') {
                for ($i=1; $i < count($data); $i++) {
                   $result = DB::connection('ditops')->table('ikrap')->insert(
                    ['provinsi' => $data[$i][0],
                       'tahun' => $data[$i][1],
                       'ikrap' => $data[$i][2]],
                   );
               }
               return $result;
            }elseif ($jenis == 'pengunjung_ppt') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('pengunjung_ppt')->insert(
                        ['bulan' => $data[$i][0],
                        'kategori' => $data[$i][1],
                        'jk' => $data[$i][2],
                        'pengguna' => $data[$i][3],
                        'pos_bln' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'radio_dinas_maritim_penerbangan') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('radio_dinas_maritim_penerbangan')->insert(
                        ['ids' => $data[$i][0],
                        'name' => $data[$i][1],
                        'sub_name' => $data[$i][2],
                        'tahun' => $data[$i][3],
                        'stn' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'radio_komunikasi') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('radio_komunikasi')->insert(
                        ['ids' => $data[$i][0],
                        'name' => $data[$i][1],
                        'short' => $data[$i][2],
                        'cat' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'radio_station_frekuensi') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('radio_station_frekuensi')->insert(
                        ['ids' => $data[$i][0],
                        'name' => $data[$i][1],
                        'sub_name' => $data[$i][2],
                        'tahun' => $data[$i][3],
                        'stn' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'radio_station_jenis_penggunaan_frekuensi') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('radio_station_jenis_penggunaan_frekuensi')->insert(
                        ['ids' => $data[$i][0],
                        'name' => $data[$i][1],
                        'sub_name' => $data[$i][2],
                        'stn' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'radio_station_penggunaan_frekuensi') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('data_ipfr')->insert(
                        ['name' => $data[$i][0],
                        'sub_name' => $data[$i][1],
                        'provinsi' => $data[$i][2],
                        'stn' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'radio_station_pita_frekuensi') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('radio_station_pita_frekuensi')->insert(
                        ['idb' => $data[$i][0],
                        'name' => $data[$i][1],
                        'provinsi' => $data[$i][2],
                        'stn' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'reor') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('reor')->insert(
                        ['kota' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'kategori' => $data[$i][2],
                        'peserta' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'respon_call') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('respon_call')->insert(
                        ['bulan' => $data[$i][0],
                        'kategori' => $data[$i][1],
                        'jumlah_call' => $data[$i][2],
                        'avg' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'sertifikasi_kecakapan') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('sertifikasi_kecakapan')->insert(
                        ['provinsi' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'kategori' => $data[$i][2],
                        'peserta' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'sertifikat_reor') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('sertifikat_reor')->insert(
                        ['jenis' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'sertifikat' => $data[$i][2]],
                    );
                }
                return $result;
            }elseif ($jenis == 'statistik_tiket') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('ditops')->table('statistik_tiket')->insert(
                        ['bulan' => $data[$i][0],
                        'kategori' => $data[$i][1],
                        'ticket' => $data[$i][2]],
                    );
                }
                return $result;
            }
            break;
        case 'kominfo_edupak':
            if ($jenis == 'tbl_butir') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('edupak')->table('tbl_butir')->insert(
                        ['id_butir' => $data[$i][0],
                        'id_sub_unsur' => $data[$i][1],
                        'nm_butir' => $data[$i][2],
                        'id_satuan' => $data[$i][3],
                        'angka_kredit' => $data[$i][4],
                        'id_jabatan' => $data[$i][5],
                        'id_jabfung' => $data[$i][6]],
                    );
                }
                return $result;
            }elseif ($jenis == 'tbl_dupak') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('edupak')->table('tbl_dupak')->insert(
                        ['id_dupak' => $data[$i][0],
                        'nip' => $data[$i][1],
                        'nip' => $data[$i][2],
                        'date_start' => $data[$i][3],
                        'date_end' => $data[$i][4],
                        'step' => $data[$i][5],
                        'status' => $data[$i][6],
                        'nama_file' => $data[$i][7],
                        'date_upload' => $data[$i][8],
                        'id_pangkat' => $data[$i][9],
                        'date_kirim' => $data[$i][10],
                        'nip_penilai1' => $data[$i][11],
                        'nip_penilai2' => $data[$i][12],
                        'nip_pleno' => $data[$i][13],
                        'his_note' => $data[$i][14]],
                    );
                }
                return $result;
            }elseif ($jenis == 'tbl_file_spmlk') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('edupak')->table('tbl_file_spmlk')->insert(
                        ['id_file' => $data[$i][0],
                        'id_dupak' => $data[$i][1],
                        'id_unsur' => $data[$i][2],
                        'filename' => $data[$i][3],
                        'fileloc' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'tbl_satuan') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('edupak')->table('tbl_satuan')->insert(
                        ['kd_satuan' => $data[$i][0],
                        'nm_satuan' => $data[$i][1]],
                    );
                }
                return $result;
            }elseif ($jenis == 'tbl_sub_unsur') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('edupak')->table('tbl_sub_unsur')->insert(
                        ['id_sub_unsur' => $data[$i][0],
                        'id_unsur' => $data[$i][1],
                        'nama_sub_unsur' => $data[$i][2],
                        'id_jabfung' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'tbl_unsur') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('edupak')->table('tbl_unsur')->insert(
                        ['id_unsur' => $data[$i][0],
                        'id_type' => $data[$i][1],
                        'nm_unsur' => $data[$i][2]],
                    );
                }
                return $result;
            }elseif ($jenis == 'tbl_user') {
                    for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('edupak')->table('tbl_user')->insert(
                        ['id_user' => $data[$i][0],
                        'nip' => $data[$i][1],
                        'password' => $data[$i][2],
                        'priv' => $data[$i][3],
                        'nama' => $data[$i][4],
                        'tempat_lahir' => $data[$i][5],
                        'tanggal_lahir' => $data[$i][6],
                        'alamat' => $data[$i][7],
                        'agama' => $data[$i][8],
                        'sex' => $data[$i][9],
                        'status_pegawai' => $data[$i][10],
                        'kartu_pegawai' => $data[$i][11],
                        'id_pangkat' => $data[$i][12],
                        'tmt_pangkat' => $data[$i][13],
                        'id_jabatan' => $data[$i][14],
                        'tmt_jabatan' => $data[$i][15],
                        'unit_kerja' => $data[$i][16],
                        'email' => $data[$i][17],
                        'foto' => $data[$i][18],
                        'pak_lama' => $data[$i][19],
                        'sign' => $data[$i][20]],
                    );
                }
                return $result;
            }
            break;
        case 'kominfo_filing':
            if ($jenis == '#Tableau_11_sid_00000158_3_Connect_CheckCreateTempTableCap') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('Tableau_11_sid_00000158_3_Connect_CheckCreateTempTableCap')->insert(
                        ['COL' => $data[$i][0]],
                    );
                }
                return $result;
            }elseif ($jenis == 'adm_assoc') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('adm_assoc')->insert(
                        ['ntc_id' => $data[$i][0],
                        'adm' => $data[$i][1]],
                    );
                }
                return $result;
            }elseif ($jenis == 'all_aff_ntw') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('all_aff_ntw')->insert(
                        ['aff_rec_id' => $data[$i][0],
                        'aff_ntc_id' => $data[$i][1],
                        'coord_prov' => $data[$i][2],
                        'agree_st' => $data[$i][3],
                        'adm' => $data[$i][4],
                        'ntwk_org' => $data[$i][5],
                        'sat_name' => $data[$i][6],
                        'long_nom' => $data[$i][7],
                        'ntf_rsn' => $data[$i][8],
                        'st_aff' => $data[$i][9],
                        'f_cause' => $data[$i][10],
                        'f_rec' => $data[$i][11]],
                    );
                }
                return $result;
            }elseif ($jenis == 'alloc_id') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('alloc_id')->insert(
                        ['ntc_year' => $data[$i][0],
                        'grp_id_last' => $data[$i][1]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ant_type') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('ant_type')->insert(
                        ['pattern_id' => $data[$i][0],
                        'f_ant_type' => $data[$i][1],
                        'f_sub_type' => $data[$i][2],
                        'emi_rcp' => $data[$i][3],
                        'pattern' => $data[$i][4],
                        'coefa' => $data[$i][5],
                        'coefb' => $data[$i][6],
                        'coefc' => $data[$i][7],
                        'coefd' => $data[$i][8],
                        'phi1' => $data[$i][9],
                        'f_ant_new' => $data[$i][10],
                        'apl_name' => $data[$i][11]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ap30b_ref_agg') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('ap30b_ref_agg')->insert(
                        ['grp_id_dn' => $data[$i][0],
                        'grp_id_up' => $data[$i][1],
                        'seq_pt' => $data[$i][2],
                        'freq_band' => $data[$i][3],
                        'c2i' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ap30b_ref_se') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('data_ipfr')->insert(
                        ['grp_id_a' => $data[$i][0],
                        'grp_id_i' => $data[$i][1],
                        'seq_pt' => $data[$i][2],
                        'freq_band' => $data[$i][3],
                        'emi_rcp' => $data[$i][4],
                        'c2i' => $data[$i][5],
                        'agree_st' => $data[$i][6]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ap30b_tr_res') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('ap30b_tr_res')->insert(
                        ['ntc_id' => $data[$i][0],
                        'freq_band' => $data[$i][1],
                        'ntc_id_a' => $data[$i][2],
                        'plan_status_a' => $data[$i][3],
                        'se_dn_tp_degr_max' => $data[$i][4],
                        'se_dn_gp_degr_max' => $data[$i][5],
                        'se_up_degr_max' => $data[$i][5],
                        'agg_degr_max' => $data[$i][6],
                        'pfd_exc_dn_max' => $data[$i][7],
                        'pfd_exc_up_max' => $data[$i][8],
                        'f_pfd_appl' => $data[$i][9]],
                    );
                }
                return $result;
            }elseif ($jenis == 'assgn') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('assgn')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'freq_sym' => $data[$i][2],
                        'freq_assgn' => $data[$i][3],
                        'freq_mhz' => $data[$i][4],
                        'f_cmp_rec' => $data[$i][5]],
                    );
                }
                return $result;
            }elseif ($jenis == 'attch') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('attch')->insert(
                        ['ntc_id' => $data[$i][0],
                        'attch_no' => $data[$i][1],
                        'attch_type' => $data[$i][2],
                        'file_name' => $data[$i][3],
                        'text_info' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'beam_tr') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('beam_tr')->insert(
                        ['ant_diam' => $data[$i][0],
                        'pattern_id' => $data[$i][1],
                        'design_emi' => $data[$i][2],
                        'grp_id' => $data[$i][3],
                        'pbeam_name' => $data[$i][4],
                        'beam_name' => $data[$i][5],
                        'emi_rcp' => $data[$i][5],
                        'ntc_id' => $data[$i][5]],
                    );
                }
                return $result;
            }elseif ($jenis == 'c_pfd') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('c_pfd')->insert(
                        ['ntc_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'freq_min' => $data[$i][2],
                        'freq_max' => $data[$i][3],
                        'pfd' => $data[$i][4],
                        'bdwdth' => $data[$i][5],
                        'ra_stn_type' => $data[$i][6]],
                    );
                }
                return $result;
            }elseif ($jenis == 'carrier_fr') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('carrier_fr')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_emiss' => $data[$i][1],
                        'seq_no' => $data[$i][2],
                        'freq_carr' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'cmr_grp_lnk') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('cmr_grp_lnk')->insert(
                        ['ntc_id' => $data[$i][0],
                        'seq_cmr' => $data[$i][1],
                        'grp_id' => $data[$i][2]],
                    );
                }
                return $result;
            }elseif ($jenis == 'cmr_history') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('cmr_history')->insert(
                        ['ntc_id' => $data[$i][0],
                        'itu_scraft_id' => $data[$i][1],
                        'seq_no' => $data[$i][2],
                        'reg_st' => $data[$i][3],
                        'd_reg_st' => $data[$i][4],
                        'rsn_susp' => $data[$i][5],
                        'wic_no' => $data[$i][6]],
                    );
                }
                return $result;
            }elseif ($jenis == 'cmr_notice') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('cmr_notice')->insert(
                        ['ntc_id' => $data[$i][0],
                        'itu_scraft_id' => $data[$i][1],
                        'd_reg_st' => $data[$i][2],
                        'reg_st' => $data[$i][3],
                        'rsn_susp' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'cmr_syst') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('cmr_syst')->insert(
                        ['ntc_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'ntwk_name' => $data[$i][2],
                        'lsp_name' => $data[$i][3],
                        'vehicle' => $data[$i][4],
                        'd_exe' => $data[$i][5],
                        'd_deliv_fr' => $data[$i][6],
                        'd_deliv_to' => $data[$i][7],
                        'facility' => $data[$i][8],
                        'mfct_name' => $data[$i][9],
                        'nbr_sat' => $data[$i][10],
                        'd_exe_m' => $data[$i][11],
                        'd_deliv_fr_m' => $data[$i][12],
                        'd_deliv_to_m' => $data[$i][13]],
                    );
                }
                return $result;
            }elseif ($jenis == 'com_el') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('com_el')->insert(
                        ['ntc_id' => $data[$i][0],
                        'prov' => $data[$i][1],
                        'plan_id' => $data[$i][2],
                        'adm' => $data[$i][3],
                        'ntwk_org' => $data[$i][4],
                        'sat_name' => $data[$i][5],
                        'long_nom' => $data[$i][6],
                        'act_code' => $data[$i][7],
                        'act_code' => $data[$i][8],
                        'st_cur' => $data[$i][9],
                        'd_rcv' => $data[$i][10],
                        'wic_no' => $data[$i][11],
                        'wic_part' => $data[$i][12],
                        'ntc_type' => $data[$i][13],
                        'adm_ref_id' => $data[$i][14],
                        'tgt_ntc_id' => $data[$i][15],
                        'stn_name' => $data[$i][16],
                        'long_dec' => $data[$i][17],
                        'lat_dec' => $data[$i][18],
                        'ctry' => $data[$i][19]],
                    );
                }
                return $result;
            }elseif ($jenis == 'coord_agree_ntw') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('coord_agree_ntw')->insert(
                        ['ntc_id' => $data[$i][0],
                        'coord_prov' => $data[$i][1],
                        'adm' => $data[$i][2],
                        'ntwk_org' => $data[$i][3],
                        'sat_name' => $data[$i][4],
                        'long_nom' => $data[$i][5]],
                    );
                }
                return $result;
            }elseif ($jenis == 'cost_recov') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('cost_recov')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_gpub' => $data[$i][1],
                        'd_invoice' => $data[$i][2],
                        'f_invoice' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'diag_grp') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('diag_grp')->insert(
                        ['grp_id' => $data[$i][0],
                        'diag_type' => $data[$i][1],
                        'diag_no' => $data[$i][2],
                        'attch_no' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'e_ant') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('e_ant')->insert(
                        ['ntc_id'=> $data[$i][0],
                        'emi_rcp'=> $data[$i][1],
                        'beam_name'=> $data[$i][2],
                        'act_code'=> $data[$i][3],
                        'beam_old'=> $data[$i][4],
                        'bmwdth'=> $data[$i][5],
                        'attch_e'=> $data[$i][6],
                        'attch_e_x'=> $data[$i][7],
                        'gain'=> $data[$i][8],
                        'pattern_id'=> $data[$i][9],
                        'pattern_id_x'=> $data[$i][10],
                        'ant_diam'=> $data[$i][11],
                        'dgso'=> $data[$i][12],
                        'attch_crdn'=> $data[$i][13],
                        'f_fdg_reqd'=> $data[$i][14],
                        'cmp_ntc_id'=> $data[$i][15],
                        'cmp_beam'=> $data[$i][16],
                        'f_cmp_str'=> $data[$i][17],
                        'f_cmp_rec'=> $data[$i][18]],
                    );
                }
                return $result;
            }elseif ($jenis == 'e_ant_elev') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('e_ant_elev')->insert(
                        ['ntc_id' => $data[$i][0],
                        'azm' => $data[$i][1],
                        'elev_ang' => $data[$i][2],
                        'f_cmp_rec' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'e_as_stn') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('data_ipfr')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'e_as_id' => $data[$i][2],
                        'stn_name' => $data[$i][3],
                        'stn_type' => $data[$i][4],
                        'long_dec' => $data[$i][5],
                        'lat_dec' => $data[$i][6],
                        'ant_alt' => $data[$i][7],
                        'clim_zone' => $data[$i][8],
                        'noise_t' => $data[$i][9],
                        'gain' => $data[$i][10],
                        'ant_diam' => $data[$i][11],
                        'dgso' => $data[$i][12],
                        'bmwdth' => $data[$i][13],
                        'pattern_id' => $data[$i][14],
                        'pattern_id_x' => $data[$i][15],
                        'long_deg' => $data[$i][16],
                        'long_ew' => $data[$i][17],
                        'long_min' => $data[$i][18],
                        'long_sec' => $data[$i][19],
                        'lat_deg' => $data[$i][20],
                        'lat_ns' => $data[$i][21],
                        'lat_min' => $data[$i][22],
                        'lat_sec' => $data[$i][23],
                        'ctry' => $data[$i][24],
                        'act_code' => $data[$i][25],
                        'attch_e' => $data[$i][26],
                        'attch_e_x' => $data[$i][27],
                        'diag_e' => $data[$i][28],
                        'diag_e_x' => $data[$i][29],
                        'stn_old' => $data[$i][30],
                        'rcp_type' => $data[$i][31],
                        'pwr_max' => $data[$i][32],
                        'bdwdth_aggr' => $data[$i][33],
                        'f_trp_band' => $data[$i][34],
                        'f_cmp_rec' => $data[$i][35]],
                    );
                }
                return $result;
            }elseif ($jenis == 'e_srvcls') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('e_srvcls')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_e_as' => $data[$i][1],
                        'seq_no' => $data[$i][2],
                        'stn_cls' => $data[$i][3],
                        'nat_srv' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'e_stn') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('data_ipfr')->insert(
                        ['ntc_id' => $data[$i][0],
                        'stn_name' => $data[$i][1],
                        'ctry' => $data[$i][2],
                        'long_deg' => $data[$i][3],
                        'long_ew' => $data[$i][4],
                        'long_min' => $data[$i][5],
                        'long_sec' => $data[$i][6],
                        'lat_deg' => $data[$i][7],
                        'lat_ns' => $data[$i][8],
                        'lat_min' => $data[$i][9],
                        'lat_sec' => $data[$i][10],
                        'sat_name' => $data[$i][11],
                        'long_nom' => $data[$i][12],
                        'attch_hor' => $data[$i][13],
                        'elev_min' => $data[$i][14],
                        'elev_max' => $data[$i][15],
                        'azm_fr' => $data[$i][16],
                        'azm_to' => $data[$i][17],
                        'ant_alt' => $data[$i][18],
                        'f_active' => $data[$i][19],
                        'long_dec' => $data[$i][20],
                        'lat_dec' => $data[$i][21],
                        'f_pfd_se' => $data[$i][22]],
                    );
                }
                return $result;
            }elseif ($jenis == 'emiss') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('emiss')->insert(
                        ['grp_id'=> $data[$i][0],
                        'seq_no'=> $data[$i][1],
                        'design_emi'=> $data[$i][2],
                        'pep_max'=> $data[$i][3],
                        'pwr_ds_max'=> $data[$i][4],
                        'pep_min'=> $data[$i][5],
                        'pwr_ds_min'=> $data[$i][6],
                        'c_to_n'=> $data[$i][7],
                        'pwr_ds_nbw'=> $data[$i][8],
                        'pulse_length'=> $data[$i][9],
                        'pulse_rep'=> $data[$i][10],
                        'f_emi_type'=> $data[$i][11],
                        'attch_pep'=> $data[$i][12],
                        'attch_mpd'=> $data[$i][13],
                        'attch_c2n'=> $data[$i][14],
                        'pwr_ds_nbc'=> $data[$i][15],
                        'f_cmp_rec'=> $data[$i][16]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ex_op_grp') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('ex_op_grp')->insert(
                        ['grp_id' => $data[$i][0],
                        'beamgrp_id' => $data[$i][1]],
                    );
                }
                return $result;
            }elseif ($jenis == 'fdg_ref') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('fdg_ref')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'd_fdg_rev' => $data[$i][2],
                        'd_type' => $data[$i][3],
                        'fdg_prov' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'freq') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('freq')->insert(
                        ['ntc_id' => $data[$i][0],
                        'emi_rcp' => $data[$i][1],
                        'beam_name' => $data[$i][2],
                        'grp_id' => $data[$i][3],
                        'seq_no' => $data[$i][4],
                        'freq_sym' => $data[$i][5],
                        'freq_assgn' => $data[$i][6],
                        'freq_mhz' => $data[$i][7],
                        'freq_min' => $data[$i][8],
                        'freq_max' => $data[$i][9],
                        'bdwdth' => $data[$i][10],
                        'fdg_reg' => $data[$i][11],
                        'd_prot_eff' => $data[$i][12],
                        'wic_no' => $data[$i][13],
                        'ntc_type' => $data[$i][14]],
                    );
                }
                return $result;
            }elseif ($jenis == 'geo') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('geo')->insert(
                        ['ntc_id' => $data[$i][0],
                        'sat_name' => $data[$i][1],
                        'long_nom' => $data[$i][2],
                        'tol_east' => $data[$i][3],
                        'tol_west' => $data[$i][4],
                        'inclin_exc' => $data[$i][5],
                        'f_active' => $data[$i][6],
                        'f_off_axis' => $data[$i][7],
                        'f_pfd_lim' => $data[$i][8],
                        'f_pfd_sep' => $data[$i][9],
                        'f_esim' => $data[$i][10],
                        'long_orig' => $data[$i][11]],
                    );
                }
                return $result;
            }elseif ($jenis == 'gpub') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('gpub')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'pub_ref' => $data[$i][2],
                        'pub_no' => $data[$i][3],
                        'ssn_type' => $data[$i][4],
                        'ssn_rev' => $data[$i][5],
                        'ssn_rev_no' => $data[$i][6],
                        'wic_no' => $data[$i][7],
                        'd_wic' => $data[$i][8]],
                    );
                }
                return $result;
            }elseif ($jenis == 'grp') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('grp')->insert(
                        ['grp_id' => $data[$i][0],
                        'ntc_id' => $data[$i][1],
                        'emi_rcp' => $data[$i][2],
                        'beam_name' => $data[$i][3],
                        'noise_t' => $data[$i][4],
                        'd_rcv' => $data[$i][5],
                        'd_prot_eff' => $data[$i][6],
                        'd_reg_limit' => $data[$i][7],
                        'd_inuse' => $data[$i][8],
                        'f_biu' => $data[$i][9],
                        'fdg_reg' => $data[$i][10],
                        'fdg_plan' => $data[$i][11],
                        'fdg_tex' => $data[$i][12],
                        'area_no' => $data[$i][13],
                        'bdwdth' => $data[$i][14],
                        'freq_min' => $data[$i][15],
                        'freq_max' => $data[$i][16],
                        'polar_type' => $data[$i][17],
                        'polar_ang' => $data[$i][18],
                        'wic_no' => $data[$i][19],
                        'wic_part' => $data[$i][20],
                        'd_wic' => $data[$i][21],
                        'adm_resp' => $data[$i][22],
                        'op_agcy' => $data[$i][23],
                        'd_rcv_start' => $data[$i][24],
                        'prov' => $data[$i][25],
                        'plan_status' => $data[$i][26],
                        'reg_op_fr' => $data[$i][27],
                        'reg_op_to' => $data[$i][28],
                        'f_ap30b_art6' => $data[$i][29],
                        'f_cost_rec' => $data[$i][30],
                        'sr_type' => $data[$i][31],
                        'page_no' => $data[$i][32],
                        'act_code' => $data[$i][33],
                        'prd_valid' => $data[$i][34],
                        'remark' => $data[$i][35],
                        'tgt_grp_id' => $data[$i][36],
                        'pwr_max' => $data[$i][37],
                        'bdwdth_aggr' => $data[$i][38],
                        'f_trp_band' => $data[$i][39],
                        'observ_cls' => $data[$i][40],
                        'd_upd' => $data[$i][41],
                        'st_cur' => $data[$i][42],
                        'd_st_cur' => $data[$i][43],
                        'fdg_observ' => $data[$i][44],
                        'spl_grp_id' => $data[$i][45],
                        'comment' => $data[$i][46],
                        'elev_min' => $data[$i][47],
                        'gso_sep' => $data[$i][48],
                        'srv_code' => $data[$i][49],
                        'f_no_intfr' => $data[$i][50],
                        'plan_categ' => $data[$i][51],
                        'pfd_pk_7g' => $data[$i][52],
                        'ra_stn_type' => $data[$i][53],
                        'eirp_nom' => $data[$i][54],
                        'sensitivity' => $data[$i][55],
                        'f_1143a' => $data[$i][56],
                        'd_first_ntf' => $data[$i][57],
                        'f_no_comment' => $data[$i][58],
                        'f_nfd_lnk' => $data[$i][59],
                        'prv_pub_grp_id' => $data[$i][60],
                        'f_sa_change' => $data[$i][61],
                        'f_fdg_reqd' => $data[$i][62],
                        'cmp_grp_id' => $data[$i][63],
                        'f_cmp_str' => $data[$i][64],
                        'f_cmp_rec' => $data[$i][65],
                        'f_cmp_freq' => $data[$i][66],
                        'f_cmp_emi' => $data[$i][67],
                        'f_cmp_eas' => $data[$i][68],
                        'f_cmp_prov' => $data[$i][69],
                        'f_cmp_sas' => $data[$i][70],
                        'f_cmp_gpub' => $data[$i][71],
                        'f_cmp_fdg' => $data[$i][72]],
                    );
                }
                return $result;
            }elseif ($jenis == 'grp_aff_rec') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('grp_aff_rec')->insert(
                        ['grp_id' => $data[$i][0],
                        'aff_rec_id' => $data[$i][1]],
                    );
                }
                return $result;
            }elseif ($jenis == 'grp_lnk') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('grp_lnk')->insert(
                        ['grp_id' => $data[$i][0],
                        'lnk_grp_id' => $data[$i][1],
                        'ntc_id' => $data[$i][2],
                        'lnk_ntc_id' => $data[$i][3],
                        'ntf_rsn' => $data[$i][4],
                        'lnk_ntf_rsn' => $data[$i][5]],
                    );
                }
                return $result;
            }elseif ($jenis == 'history') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('history')->insert(
                        ['ntc_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'oper_id' => $data[$i][2],
                        'd_hist' => $data[$i][3],
                        'st_cur' => $data[$i][4],
                        'hist_text' => $data[$i][5]],
                    );
                }
                return $result;
            }elseif ($jenis == 'hor_elev') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('hor_elev')->insert(
                        ['ntc_id' => $data[$i][0],
                        'azm' => $data[$i][1],
                        'elev_ang' => $data[$i][2],
                        'hor_dist' => $data[$i][3],
                        'f_cmp_rec' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'link_epm') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('link_epm')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_e_as' => $data[$i][1],
                        'seq_assgn' => $data[$i][2],
                        'seq_emiss' => $data[$i][3],
                        'epm' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'mask_info') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('mask_info')->insert(
                        ['ntc_id' => $data[$i][0],
                        'mask_id' => $data[$i][1],
                        'freq_min' => $data[$i][2],
                        'freq_max' => $data[$i][3],
                        'f_mask' => $data[$i][4],
                        'f_mask_type' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'mask_lnk1') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('mask_lnk1')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'ntc_id' => $data[$i][2],
                        'orb_id' => $data[$i][3],
                        'sat_orb_id' => $data[$i][4],
                        'mask_id' => $data[$i][5]],
                    );
                }
                return $result;
            }elseif ($jenis == 'mask_lnk2') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('data_ipfr')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'seq_e_as' => $data[$i][2],
                        'ntc_id' => $data[$i][3],
                        'orb_id' => $data[$i][4],
                        'sat_orb_id' => $data[$i][5],
                        'mask_id' => $data[$i][6]],
                    );
                }
                return $result;
            }elseif ($jenis == 'mod_char') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('mod_char')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_emiss' => $data[$i][1],
                        'i_mod_typ' => $data[$i][2],
                        'freq_low' => $data[$i][3],
                        'freq_hi' => $data[$i][4],
                        'freq_dev' => $data[$i][5],
                        'freq_dev_tv' => $data[$i][6],
                        'i_pre_emph' => $data[$i][7],
                        'i_mplx_typ' => $data[$i][8],
                        'bit_rate' => $data[$i][9],
                        'nbr_phase' => $data[$i][10],
                        'attch_sig' => $data[$i][11],
                        'ampl_mod' => $data[$i][12],
                        'freq_dev_fm' => $data[$i][13],
                        'freq_swp' => $data[$i][14],
                        'i_nrgy_dsp' => $data[$i][15],
                        'i_nrgy_dsp_typ' => $data[$i][16],
                        'attch_mod' => $data[$i][17],
                        'i_tv_sys' => $data[$i][18],
                        'i_sound_bc' => $data[$i][19],
                        'i_baseband' => $data[$i][20],
                        'range_agc' => $data[$i][21]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ngma') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('ngma')->insert(
                        ['ntc_id' => $data[$i][0],
                        'ngma_id' => $data[$i][1],
                        'act_code' => $data[$i][2],
                        'strp_id_fr' => $data[$i][3],
                        'strp_id_to' => $data[$i][4],
                        'noise_t_lo' => $data[$i][5],
                        'gain_as_lo' => $data[$i][6],
                        'noise_t_hr' => $data[$i][7],
                        'gain_as_hr' => $data[$i][8],
                        'stn_name' => $data[$i][9],
                        'f_cmp_rec' => $data[$i][10]],
                    );
                }
                return $result;
            }elseif ($jenis == 'non_geo') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('non_geo')->insert(
                        ['ntc_id' => $data[$i][0],
                        'sat_name' => $data[$i][1],
                        'ref_body' => $data[$i][2],
                        'nbr_sat_nh' => $data[$i][3],
                        'nbr_sat_sh' => $data[$i][4],
                        'nbr_plane' => $data[$i][5],
                        'nbr_sat_td' => $data[$i][6],
                        'density' => $data[$i][7],
                        'avg_dist' => $data[$i][8],
                        'f_x_zone' => $data[$i][9],
                        'x_zone' => $data[$i][10],
                        'f_epfd' => $data[$i][11],
                        'f_active' => $data[$i][12],
                        'attch_x_zone' => $data[$i][13],
                        'f_pfd_lim' => $data[$i][14],
                        'attch_simult_ops' => $data[$i][15],
                        'f_sdm' => $data[$i][16],
                        'f_constell' => $data[$i][17],
                        'multi_config_type' => $data[$i][18],
                        'nbr_config' => $data[$i][19],
                        'attch_multi_config' => $data[$i][20],
                        'examset_type' => $data[$i][21],
                        'attch_qv' => $data[$i][22]],
                    );
                }
                return $result;
            }elseif ($jenis == 'notice') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('notice')->insert(
                        ['ntc_id' => $data[$i][0],
                        'prov' => $data[$i][1],
                        'plan_id' => $data[$i][2],
                        'adm' => $data[$i][3],
                        'ntwk_org' => $data[$i][4],
                        'ntf_occurs' => $data[$i][5],
                        'ntf_rsn' => $data[$i][6],
                        'st_cur' => $data[$i][7],
                        'f_aa_type' => $data[$i][8],
                        'act_code' => $data[$i][9],
                        'd_rcv' => $data[$i][10],
                        'wic_no' => $data[$i][11],
                        'wic_part' => $data[$i][12],
                        'd_wic' => $data[$i][13],
                        'f_adm_proxi' => $data[$i][14],
                        'ntc_type' => $data[$i][15],
                        'adm_ref_id' => $data[$i][16],
                        'd_adm' => $data[$i][17],
                        'tgt_ntc_id' => $data[$i][18],
                        'f_int_ext' => $data[$i][19],
                        'd_st_cur' => $data[$i][20],
                        'st_prv' => $data[$i][21],
                        'd_upd' => $data[$i][22],
                        'f_basic' => $data[$i][23],
                        'f_spl' => $data[$i][24],
                        'spl_ntc_id' => $data[$i][25],
                        'ntwk_pack' => $data[$i][26],
                        'f_mod_type' => $data[$i][27],
                        'f_val_cat' => $data[$i][28],
                        'cmp_ntc_id' => $data[$i][29],
                        'f_cmp_str' => $data[$i][30],
                        'f_cmp_rec' => $data[$i][31],
                        'f_cmp_orb' => $data[$i][32],
                        'f_cmp_strp' => $data[$i][33],
                        'f_cmp_ngma' => $data[$i][34],
                        'f_cmp_hori' => $data[$i][35],
                        'f_cmp_elev' => $data[$i][36],
                        'f_cmp_pfd' => $data[$i][37],
                        'f_cmp_oper' => $data[$i][38],
                        'f_cfex' => $data[$i][39],
                        'f_val' => $data[$i][40],
                        'f_mod' => $data[$i][41],
                        'f_aes_char' => $data[$i][42],
                        'prov_desc' => $data[$i][43],
                        'f_partial_sup' => $data[$i][44]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ntc_commit') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('ntc_commit')->insert(
                        ['ntc_id' => $data[$i][0],
                        'commit_type' => $data[$i][1]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ntc_lnk') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('ntc_lnk')->insert(
                        ['ntc_id' => $data[$i][0],
                        'lnk_ntc_id' => $data[$i][1],
                        'ntf_rsn' => $data[$i][2],
                        'lnkntf_rsn' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ntc_lnk_ref') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('ntc_lnk_ref')->insert(
                        ['plan_id' => $data[$i][0],
                        'ntc_id' => $data[$i][1],
                        'pbeam_name' => $data[$i][2],
                        'adm' => $data[$i][3],
                        'long_nom' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ntc_memo') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('ntc_memo')->insert(
                        ['ntc_id' => $data[$i][0],
                        'adm_remark' => $data[$i][1],
                        'br_comment' => $data[$i][2]],
                    );
                }
                return $result;
            }elseif ($jenis == 'orbit') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('orbit')->insert(
                        ['ntc_id' => $data[$i][0],
                        'orb_id' => $data[$i][1],
                        'nbr_sat_pl' => $data[$i][2],
                        'right_asc' => $data[$i][3],
                        'inclin_ang' => $data[$i][4],
                        'prd_ddd' => $data[$i][5],
                        'prd_hh' => $data[$i][6],
                        'prd_mm' => $data[$i][7],
                        'apog' => $data[$i][8],
                        'apog_exp' => $data[$i][9],
                        'perig' => $data[$i][10],
                        'perig_exp' => $data[$i][11],
                        'perig_arg' => $data[$i][12],
                        'op_ht' => $data[$i][13],
                        'op_ht_exp' => $data[$i][14],
                        'f_stn_keep' => $data[$i][15],
                        'rpt_prd_dd' => $data[$i][16],
                        'rpt_prd_hh' => $data[$i][17],
                        'rpt_prd_mm' => $data[$i][18],
                        'rpt_prd_ss' => $data[$i][19],
                        'f_precess' => $data[$i][20],
                        'precession' => $data[$i][21],
                        'long_asc' => $data[$i][22],
                        'keep_rnge' => $data[$i][23],
                        'f_sunsynch' => $data[$i][24],
                        'lt_type' => $data[$i][25],
                        'lt_ref' => $data[$i][26],
                        'f_cmp_rec' => $data[$i][27],
                        'f_cmp_pha' => $data[$i][28]],
                    );
                }
                return $result;
            }elseif ($jenis == 'orbit_lnk') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('orbit_lnk')->insert(
                        ['ntc_id' => $data[$i][0],
                        'emi_rcp' => $data[$i][1],
                        'beam_name' => $data[$i][2],
                        'orb_id' => $data[$i][3],
                        'f_all_sat' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'ovrl_epm') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('ovrl_epm')->insert(
                        ['grp_id_up' => $data[$i][0],
                        'grp_id' => $data[$i][1],
                        'seq_e_as_dn' => $data[$i][2],
                        'seq_asn_up' => $data[$i][3],
                        'seq_asn_dn' => $data[$i][4],
                        'seq_emi_up' => $data[$i][5],
                        'seq_emi_dn' => $data[$i][6],
                        'oepm' => $data[$i][7]],
                    );
                }
                return $result;
            }elseif ($jenis == 'phase') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('data_ipfr')->insert(
                        ['ntc_id' => $data[$i][0],
                        'orb_id' => $data[$i][1],
                        'orb_sat_id' => $data[$i][2],
                        'phase_ang' => $data[$i][3],
                        'd_ref' => $data[$i][4],
                        't_ref' => $data[$i][5],
                        'f_cmp_rec' => $data[$i][6]],
                    );
                }
                return $result;
            }elseif ($jenis == 'pl_strap') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('pl_strap')->insert(
                        ['ntc_id' => $data[$i][0],
                        'freq_dn' => $data[$i][1],
                        'freq_up' => $data[$i][2],
                        'grp_id_dn' => $data[$i][3],
                        'grp_id_up' => $data[$i][4],
                        'pbeam_name' => $data[$i][5],
                        'multibeam_set' => $data[$i][6],
                        'exop_set' => $data[$i][7],
                        'f_victim_op' => $data[$i][8],
                        'agg_tolerance' => $data[$i][9]],
                    );
                }
                return $result;
            }elseif ($jenis == 'plan_pub') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('plan_pub')->insert(
                        ['ntc_id' => $data[$i][0],
                        'wic_no' => $data[$i][1],
                        'plan_pub_type' => $data[$i][2]],
                    );
                }
                return $result;
            }elseif ($jenis == 'provn') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('provn')->insert(
                        ['grp_id' => $data[$i][0],
                        'coord_prov' => $data[$i][1],
                        'agree_st' => $data[$i][2],
                        'seq_no' => $data[$i][3],
                        'coord_st' => $data[$i][4],
                        'adm' => $data[$i][5],
                        'ntwk_org' => $data[$i][6],
                        'ctry' => $data[$i][7]],
                    );
                }
                return $result;
            }elseif ($jenis == 'pub_ssn') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('pub_ssn')->insert(
                        ['ntc_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'ssn_ref' => $data[$i][2],
                        'ssn_no' => $data[$i][3],
                        'ssn_rev' => $data[$i][4],
                        'ssn_rev_no' => $data[$i][5]],
                    );
                }
                return $result;
            }elseif ($jenis == 'pwr_ctrl') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('pwr_ctrl')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_assgn' => $data[$i][1],
                        'seq_emiss' => $data[$i][2],
                        'pwr_ctrl' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'res49_sel') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('res49_sel')->insert(
                        ['grp_id' => $data[$i][0],
                        'sat_name' => $data[$i][1],
                        'long_nom' => $data[$i][2],
                        'ntf_rsn' => $data[$i][3],
                        'adm' => $data[$i][4],
                        'ntwk_org' => $data[$i][5],
                        'd_inuse' => $data[$i][6],
                        'ntc_id' => $data[$i][7],
                        'st_cur' => $data[$i][8],
                        'd_prot_eff' => $data[$i][9],
                        'freq_min' => $data[$i][10],
                        'freq_max' => $data[$i][11],
                        'wic_no' => $data[$i][12],
                        'd_wic' => $data[$i][13],
                        'act_code' => $data[$i][14],
                        'emi_rcp' => $data[$i][15],
                        'beam_name' => $data[$i][16],
                        'ntc_type' => $data[$i][17],
                        'd_reg_g' => $data[$i][18]],
                    );
                }
                return $result;
            }elseif ($jenis == 's_as_stn') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('s_as_stn')->insert(
                        ['grp_id' => $data[$i][0],
                        'sat_name' => $data[$i][1],
                        'beam_name' => $data[$i][2],
                        'act_code' => $data[$i][3],
                        'beam_old' => $data[$i][4],
                        'sat_old' => $data[$i][5],
                        'stn_type' => $data[$i][6],
                        'long_nom' => $data[$i][7],
                        'f_cmp_rec' => $data[$i][8]],
                    );
                }
                return $result;
            }elseif ($jenis == 's_beam') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('s_beam')->insert(
                        ['ntc_id' => $data[$i][0],
                        'emi_rcp' => $data[$i][1],
                        'beam_name' => $data[$i][2],
                        'beam_old' => $data[$i][3],
                        'f_steer' => $data[$i][4],
                        'gain' => $data[$i][5],
                        'gain_x' => $data[$i][6],
                        'beamlet' => $data[$i][7],
                        'bore_long' => $data[$i][8],
                        'bore_lat' => $data[$i][9],
                        'maj_axis' => $data[$i][10],
                        'min_axis' => $data[$i][11],
                        'orient' => $data[$i][12],
                        'pnt_acc' => $data[$i][13],
                        'rot_acc' => $data[$i][14],
                        'pattern_id' => $data[$i][15],
                        'pattern_id_x' => $data[$i][16],
                        'freq_min' => $data[$i][17],
                        'freq_max' => $data[$i][18],
                        'sr_type' => $data[$i][19],
                        'act_code' => $data[$i][20],
                        'ang_alpha' => $data[$i][21],
                        'ang_beta' => $data[$i][22],
                        'attch_alpha_beta' => $data[$i][23],
                        'attch_e' => $data[$i][24],
                        'attch_e_x' => $data[$i][25],
                        'attch_elev' => $data[$i][26],
                        'attch_gain' => $data[$i][27],
                        'attch_loss' => $data[$i][28],
                        'pwr_max_4k' => $data[$i][29],
                        'pwr_avg_4k' => $data[$i][30],
                        'pwr_max_1m' => $data[$i][31],
                        'pwr_avg_1m' => $data[$i][32],
                        'prot_ratio' => $data[$i][33],
                        'f_fdg_reqd' => $data[$i][34],
                        'f_tx_vis' => $data[$i][35],
                        'tx_ang_min' => $data[$i][36],
                        'attch_pfd_steer' => $data[$i][37],
                        'f_pfd_steer_default' => $data[$i][38],
                        'f_all_orbit' => $data[$i][39],
                        'f_co_change' => $data[$i][40],
                        'f_aggso_change' => $data[$i][41],
                        'cmp_ntc_id' => $data[$i][42],
                        'cmp_beam' => $data[$i][43],
                        'f_cmp_str' => $data[$i][44],
                        'f_cmp_rec' => $data[$i][45]],
                    );
                }
                return $result;
            }elseif ($jenis == 'sat_lnk') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('sat_lnk')->insert(
                        ['ntc_id' => $data[$i][0],
                        'emi_rcp' => $data[$i][1],
                        'beam_name' => $data[$i][2],
                        'orb_id' => $data[$i][3],
                        'orb_sat_id' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'sat_oper') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('sat_oper')->insert(
                        ['ntc_id' => $data[$i][0],
                        'lat_fr' => $data[$i][1],
                        'lat_to' => $data[$i][2],
                        'nbr_op_sat' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'sat_sys_provn') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('sat_sys_provn')->insert(
                        ['plan_id' => $data[$i][0],
                        'ntwk_pack' => $data[$i][1],
                        'coord_prov' => $data[$i][2],
                        'agree_st' => $data[$i][3],
                        'ific_no' => $data[$i][4],
                        'adm' => $data[$i][5],
                        'ntwk_org' => $data[$i][6]],
                    );
                }
                return $result;
            }elseif ($jenis == 'scraft_cmr_freq') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('scraft_cmr_freq')->insert(
                        ['itu_scraft_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'freq_min' => $data[$i][2],
                        'freq_max' => $data[$i][3],
                        'freq_sym' => $data[$i][4]],
                    );
                }
                return $result;
            }elseif ($jenis == 'scraft_cmr_syst') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('scraft_cmr_syst')->insert(
                        ['itu_scraft_id' => $data[$i][0],
                        'ntwk_name' => $data[$i][1],
                        'lsp_name' => $data[$i][2],
                        'vehicle' => $data[$i][3],
                        'd_exe' => $data[$i][4],
                        'facility' => $data[$i][5],
                        'mfct_name' => $data[$i][6],
                        'nbr_sat' => $data[$i][7],
                        'd_exe_m' => $data[$i][8],
                        'd_deliv' => $data[$i][9],
                        'd_launch' => $data[$i][10]],
                    );
                }
                return $result;
            }elseif ($jenis == 'sps_results') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('data_ipfr')->insert(
                        ['ntc_id' => $data[$i][0],
                        'ntwk_pack' => $data[$i][1],
                        'ntc_id_aff' => $data[$i][2],
                        'pbeam_name' => $data[$i][3],
                        'aff_ch_pfd' => $data[$i][4],
                        'pfd_exc_max' => $data[$i][5],
                        'aff_ch_epm' => $data[$i][6],
                        'epm_c2i_dgr_max' => $data[$i][7],
                        'aff_chs' => $data[$i][8],
                        'pfd_exc' => $data[$i][9],
                        'epm_dgr' => $data[$i][10],
                        'freq_band' => $data[$i][11]],
                    );
                }
                return $result;
            }elseif ($jenis == 'srs_ooak') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('srs_ooak')->insert(
                        ['grp_id' => $data[$i][0],
                        'ctry' => $data[$i][1]],
                    );
                }
                return $result;
            }elseif ($jenis == 'srv_area') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('srv_area')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'stn_cls' => $data[$i][2],
                        'nat_srv' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'srv_cls') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('srv_cls')->insert(
                        ['grp_id' => $data[$i][0],
                        'seq_no' => $data[$i][1],
                        'stn_cls' => $data[$i][2],
                        'nat_srv' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'strap') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('strap')->insert(
                        ['ntc_id' => $data[$i][0],
                        'strp_id' => $data[$i][1],
                        'act_code' => $data[$i][2],
                        'beam_up' => $data[$i][3],
                        'beam_dn' => $data[$i][4],
                        'freq_symup' => $data[$i][5],
                        'freq_up' => $data[$i][6],
                        'freq_dn' => $data[$i][7],
                        'f_cmp_rec' => $data[$i][8]],
                    );
                }
                return $result;
            }elseif ($jenis == 'tr_aff_ntw') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('tr_aff_ntw')->insert(
                        ['ntc_id' => $data[$i][0],
                        'coord_prov' => $data[$i][1],
                        'agree_st' => $data[$i][2],
                        'aff_ntc_id' => $data[$i][3],
                        'adm' => $data[$i][4],
                        'ntwk_org' => $data[$i][5],
                        'sat_name' => $data[$i][6],
                        'long_nom' => $data[$i][7],
                        'ntf_rsn' => $data[$i][8],
                        'coord_st' => $data[$i][9],
                        'st_aff' => $data[$i][10],
                        'f_cause' => $data[$i][11],
                        'f_rec' => $data[$i][12],
                        'd_prot_inc' => $data[$i][13],
                        'wic_no' => $data[$i][14]],
                    );
                }
                return $result;
            }elseif ($jenis == 'tr_provn') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('filing')->table('tr_provn')->insert(
                        ['ntc_id' => $data[$i][0],
                        'coord_prov' => $data[$i][1],
                        'agree_st' => $data[$i][2],
                        'wic_no' => $data[$i][3],
                        'seq_no' => $data[$i][4],
                        'coord_st' => $data[$i][5],
                        'adm' => $data[$i][6],
                        'ntwk_org' => $data[$i][7],
                        'ctry' => $data[$i][8]],
                    );
                }
                return $result;
            }
            break;
        case 'kominfo_pnbp':
            if ($jenis == 'pnbp_1') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('pnbp')->table('pnbp_1')->insert(
                        ['jenis_pnbp' => $data[$i][0],
                        'blu_or_not' => $data[$i][1],
                        'tahun' => $data[$i][2],
                        'total' => $data[$i][3]],
                    );
                }
                return $result;
            }elseif ($jenis == 'pnbp_2') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('pnbp')->table('pnbp_2')->insert(
                        ['jenis_pnbp' => $data[$i][0],
                        'target' => $data[$i][1],
                        'realisasi' => $data[$i][2],
                        'tahun' => $data[$i][3]],
                    );
                }
                return $result;
            }
            break;
        case 'kominfo_siap':
            if ($jenis == 'ta_absen') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_absen')->insert(
                        ['nip' => $data[$i][0],
                        'tgl_masuk' => $data[$i][0],
                        'kode_absen' => $data[$i][1],
                        'kode_range' => $data[$i][2],
                        'jam_masuk' => $data[$i][3],
                        'jam_keluar' => $data[$i][4],
                        'isi_manual' => $data[$i][5],
                        'waktu_simpan' => $data[$i][6]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_angka_kredit') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_angka_kredit')->insert(
                        ['nip' => $data[$i][0],
                        'tgl_penetapan' => $data[$i][1],
                        'pak_1a1' => $data[$i][2],
                        'pak_1a2' => $data[$i][3],
                        'pak_1b' => $data[$i][4],
                        'pak_1c' => $data[$i][5],
                        'pak_1d' => $data[$i][6],
                        'pak_1e' => $data[$i][7],
                        'pak_2' => $data[$i][8],
                        'catatan' => $data[$i][9],
                        'kode_pejabat' => $data[$i][10],
                        'path_filee' => $data[$i][11],
                        'disetujui' => $data[$i][12]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_bagian') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_bagian')->insert(
                        ['kode_bagian' => $data[$i][0],
                        'nama_bagian' => $data[$i][1],
                        'kode_unit' => $data[$i][2],
                        'aktif' => $data[$i][3],
                        'mulai' => $data[$i][4],
                        'sampai' => $data[$i][5],
                        'waktu_simpan' => $data[$i][6]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_cabang') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_cabang')->insert(
                        ['kode_cabang'=>$data[$i][0],
                        'nama_cabang'=>$data[$i][1],
                        'jadwal_apel'=>$data[$i][2],
                        'entry_pin'=>$data[$i][3],
                        'id_kab_kota'=>$data[$i][4]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_eselon') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_eselon')->insert(
                        ['kode_eselon' => $data[$i][0],
                        'nama_eselon' => $data[$i][1],
                        'nilai_bopt' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_grade') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_grade')->insert(
                        ['kode_grade' => $data[$i][0],
                        'nilai_grade' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_hukuman_disiplin') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_hukuman_disiplin')->insert(
                        ['nip' => $data[$i][0],
                        'tgl_awal' => $data[$i][1],
                        'tgl_akhir' => $data[$i][2],
                        'kode_potongan' => $data[$i][3],
                        'tgl_penetapan' => $data[$i][4],
                        'dokumen_disiplin' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_ijin') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_ijin')->insert(
                        ['kode_ijin' => $data[$i][0],
                        'ket_ijin' => $data[$i][1],
                        'perhitungan' => $data[$i][2],
                        'ketentuan' => $data[$i][3],
                        'jatah_ijin' => $data[$i][4],
                        'kredit' => $data[$i][5],
                        'berlaku' => $data[$i][6],
                        'dasar' => $data[$i][7],
                        'proses_diawal' => $data[$i][8],
                        'kode_tidak_hadir' => $data[$i][9],
                        'hitung_hari_kerja' => $data[$i][10],
                        'hitung_jam_kerja' => $data[$i][11],
                        'potongan' => $data[$i][12],
                        'kolektif' => $data[$i][13]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_ijin_berlapis') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_ijin_berlapis')->insert(
                        ['kode_ijin' => $data[$i][0],
                        'kode_ijin_lapisan' => $data[$i][1],
                        'hari_ke' => $data[$i][2],
                        'sd_hari_ke' => $data[$i][3],
                        'potongan_tkk' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_ijin_hari') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_ijin_hari')->insert(
                        ['nip' =>$data[$i][0],
                        'tgl_awal' =>$data[$i][1],
                        'tgl_akhir' =>$data[$i][2],
                        'kode_ijin' =>$data[$i][3],
                        'jml_hari' =>$data[$i][4],
                        'tgl_jatah' =>$data[$i][5],
                        'bukti_ijin' =>$data[$i][6],
                        'status' =>$data[$i][7],
                        'waktu_simpan' =>$data[$i][8],
                        'flag_dokumen' =>$data[$i][9],
                        'username' =>$data[$i][10],
                        'catatan_ijin' =>$data[$i][11],
                        'no_surat' =>$data[$i][12],
                        'kota_asal' =>$data[$i][13],
                        'kota_tujuan' =>$data[$i][14],
                        'jenis_transportasi' =>$data[$i][15],
                        'no_surat_dokter' =>$data[$i][16],
                        'negara_asal' =>$data[$i][17],
                        'negara_tujuan' =>$data[$i][18],
                        'id_ijin' =>$data[$i][19],
                        'nip_verifikator' =>$data[$i][20]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_ijin_jam') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_ijin_jam')->insert(
                        ['nip' => $data[$i][0],
                        'tgl_ijin' => $data[$i][1],
                        'jam_awal' => $data[$i][2],
                        'jam_akhir' => $data[$i][3],
                        'kode_ijin' => $data[$i][4],
                        'alasan_ijin' => $data[$i][5],
                        'ijin_dinas' => $data[$i][6],
                        'status_ijin' => $data[$i][7],
                        'waktu_simpan' => $data[$i][8],
                        'ijin_ke' => $data[$i][9],
                        'flag_dokuen' => $data[$i][10],
                        'nip_verifikasi' => $data[$i][11],
                        'tgl_disetujui' => $data[$i][12]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_jabatan') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_jabatan')->insert(
                        ['kode_jabatan' => $data[$i][0],
                        'nama_jabatan' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_karyawan') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_karyawan')->insert(
                        ['nip'=> $data[$i][0],
                        'pin'=> $data[$i][1],
                        'nama'=> $data[$i][2],
                        'non_aktif'=> $data[$i][3],
                        'template'=> $data[$i][4],
                        'tgl_lahir'=> $data[$i][5],
                        'no_mesin'=> $data[$i][6],
                        'kode_cabang'=> $data[$i][7],
                        'kode_departemen'=> $data[$i][8],
                        'kode_jabatan'=> $data[$i][9],
                        'kode_golongan'=> $data[$i][10],
                        'kode_shift'=> $data[$i][11],
                        'tmt'=> $data[$i][12],
                        'aktif'=> $data[$i][13],
                        'kode_unit'=> $data[$i][14],
                        'kode_bagian'=> $data[$i][15],
                        'kode_subbagian'=> $data[$i][16],
                        'kode_eselon'=> $data[$i][17],
                        'kode_status_pegawai'=> $data[$i][18],
                        'waktu_simmpan'=> $data[$i][19],
                        'jabatan_struktural'=> $data[$i][20],
                        'kode_grade'=> $data[$i][21],
                        'npwp'=> $data[$i][22],
                        'nama_bank'=> $data[$i][23],
                        'norek_bank'=> $data[$i][24],
                        'kode_nomenklatur'=> $data[$i][25],
                        'kode_jabatan_plt'=> $data[$i][26],
                        'kode_tugas'=> $data[$i][27]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_lembur') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_lembur')->insert(
                        ['nip' => $data[$i][0],
                        'tgl_spl' => $data[$i][1],
                        'jam_awal_spl' => $data[$i][2],
                        'jam_akhir_spl' => $data[$i][3],
                        'jenis_kerja_spl' => $data[$i][4],
                        'status_lembur' => $data[$i][5],
                        'waktu_simpan' => $data[$i][6]],

                    );
                }
                return $result;
            } elseif ($jenis == 'ta_libur') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_libur')->insert(
                        ['tgl_libur' => $data[$i][0],
                        'tgl_libur' => $data[$i][1]],

                    );
                }
                return $result;
            } elseif ($jenis == 'ta_libur_regional') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_libur_regional')->insert(
                        ['tgl_libur' => $data[$i][0],
                        'kode_cabang' => $data[$i][1],
                        'ket_libur' => $data[$i][2],
                        'id_libur' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_nomenklatur') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_nomenklatur')->insert(
                        ['kode_nomenklatur' => $data[$i][0],
                        'nama_nomenklatur' => $data[$i][1],
                        'honorarium_nomenklatur' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_otoritas_departemen') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_otoritas_departemen')->insert(
                        ['username' => $data[$i][0],
                        'kode_departemen' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_pnbp') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_pnbp')->insert(
                        ['nip' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'kode_golongan' => $data[$i][2],
                        'kode_nomeklatur' => $data[$i][3],
                        'honorarium' => $data[$i][4],
                        'pot_a' => $data[$i][5],
                        'pot_b' => $data[$i][6],
                        'pot_c' => $data[$i][7],
                        'pot_d' => $data[$i][8],
                        'pot_e' => $data[$i][9],
                        'total_pot' => $data[$i][10],
                        'honorarium_setelah_pot' => $data[$i][11],
                        'pajak_gol' => $data[$i][12],
                        'potongan_pajak' => $data[$i][13],
                        'honorarium_diterima' => $data[$i][14]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_pola') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_pola')->insert(
                        ['kode_shift' => $data[$i][0],
                        'tgl_mulai' => $data[$i][1],
                        'nama_group' => $data[$i][2],
                        'format' => $data[$i][3],
                        'libur_nasional' => $data[$i][4],
                        'kode_departemen' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_pph') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_pph')->insert(
                        ['nip' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'bulan' => $data[$i][2],
                        'gjpokok' => $data[$i][3],
                        'tjistri' => $data[$i][4],
                        'tjanak' => $data[$i][5],
                        'jmlgjtj' => $data[$i][6],
                        'tjberas' => $data[$i][7],
                        'tjstruk' => $data[$i][8],
                        'tjfungsi' => $data[$i][9],
                        'tjupns' => $data[$i][10],
                        'nilai_tk' => $data[$i][11],
                        'pembul' => $data[$i][12],
                        'batas_ptkp' => $data[$i][13],
                        'jml_penghasila_a' => $data[$i][14],
                        'biaya_jabatan_a' => $data[$i][15],
                        'iuran_pensiuan_a' => $data[$i][16],
                        'pengurangan_a' => $data[$i][17],
                        'neto_a' => $data[$i][18],
                        'neto_setahun_a' => $data[$i][19],
                        'ptkp_a' => $data[$i][20],
                        'pkp_a' => $data[$i][21],
                        'pkp_bulan' => $data[$i][22],
                        'pph' => $data[$i][23],
                        'pph_lapisan1_a' => $data[$i][24],
                        'pph_lapisan2_a' => $data[$i][25],
                        'pph_lapisan3_a' => $data[$i][26],
                        'pph_lapisan4_a' => $data[$i][27],
                        'pph_a' => $data[$i][28],
                        'pph_sebelum' => $data[$i][29],
                        'jumlah_penghasial_b' => $data[$i][30],
                        'biaya_jabatan_b' => $data[$i][31],
                        'iuran_pensiun_b' => $data[$i][32],
                        'pengurangan_b' => $data[$i][34],
                        'neto_b' => $data[$i][35],
                        'neto_setahun_b' => $data[$i][36],
                        'ptkp_b' => $data[$i][37],
                        'pkp_b' => $data[$i][38],
                        'pkp_bulan_b' => $data[$i][39],
                        'pkp_bulat_b' => $data[$i][40],
                        'pph_lapisan1_b' => $data[$i][41],
                        'pph_lapisan2_b' => $data[$i][42],
                        'pph_lapisan3_b' => $data[$i][43],
                        'pph_lapisan4_b' => $data[$i][44],
                        'pph_b' => $data[$i][45],
                        'pph_sebulan_b' => $data[$i][46],
                        'pajak_tk' => $data[$i][47],
                        'tjdaerah' => $data[$i][48],
                        'tjpercil' => $data[$i][49],
                        'tjlain' => $data[$i][50],
                        'tjkompen' => $data[$i][51],
                        'tjpph' => $data[$i][52],
                        'potpph' => $data[$i][53],
                        'bersih' => $data[$i][54],
                        'potpfk10' => $data[$i][55],
                        'potpfkbul' => $data[$i][56],
                        'potswrum' => $data[$i][57],
                        'potkelbtj' => $data[$i][58],
                        'pottabr' => $data[$i][59],
                        'potlain' => $data[$i][60],
                        'kdkawin' => $data[$i][61]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_ptkp') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_ptkp')->insert(
                        ['kode_kawin' => $data[$i][0],
                        'batas_ptpkp' => $data[$i][1],
                        'ket_kawin' => $data[$i][2],
                        'ptpkp' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_range') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_range')->insert(
                        ['kode_range' => $data[$i][1],
                        'kode_absen' => $data[$i][2],
                        'jam_awal' => $data[$i][3],
                        'jam_akhir' => $data[$i][4],
                        'tol_masuk' => $data[$i][5],
                        'tol_pulang' => $data[$i][6],
                        'limit_awal' => $data[$i][7],
                        'limit_akhir' => $data[$i][8],
                        'jam_kerja' => $data[$i][9],
                        'jam_istirahat' => $data[$i][10],
                        'waktu_flexibel' => $data[$i][11]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_range_detail') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_range_detail')->insert(
                        ['kode_range' => $data[$i][0],
                        'kode_departemen' => $data[$i][1],
                        'ket_range' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_riwayat_karyawan') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('data_ipfr')->insert(
                        ['nip' => $data[$i][0],
                        'bulan' => $data[$i][1],
                        'tahun' => $data[$i][2],
                        'kode_cabang' => $data[$i][3],
                        'kode_departemen' => $data[$i][4],
                        'kode_jabatan' => $data[$i][5],
                        'kode_golongan' => $data[$i][6],
                        'kode_unit' => $data[$i][7],
                        'kode_bagian' => $data[$i][8],
                        'kode_subbagian' => $data[$i][9],
                        'kode_eselon' => $data[$i][10],
                        'kode_status_pegawai' => $data[$i][11],
                        'jabatan_struktural' => $data[$i][12],
                        'kode_grade' => $data[$i][13],
                        'lap_keuangan' => $data[$i][14],
                        'nama_bank' => $data[$i][15],
                        'norek_bank' => $data[$i][16],
                        'kode_nomenklatur' => $data[$i][17]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_status_pegawai') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_status_pegawai')->insert(
                        ['kode_status' => $data[$i][0],
                        'nama_status' => $data[$i][1],
                        'prosen_grade' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_subbagian') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_subbagian')->insert(
                        ['kode_subbagian' => $data[$i][1],
                        'nama_subbagian' => $data[$i][2],
                        'kode_bagian' => $data[$i][3],
                        'aktif' => $data[$i][4],
                        'mulai' => $data[$i][5],
                        'sampai' => $data[$i][6],
                        'waktu_simpan' => $data[$i][7]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_unit') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('siap')->table('ta_unit')->insert(
                        ['kode_unit' => $data[$i][0],
                        'nama_unit' => $data[$i][1],
                        'kode_cabang' => $data[$i][2],
                        'aktif' => $data[$i][3],
                        'mulai' => $data[$i][4],
                        'sampai' => $data[$i][5],
                        'waktu_simpan' => $data[$i][6]],
                    );
                }
                return $result;
            }
            break;
        case 'kominfo_siemon':
            if ($jenis == 'lap_monev_perangkat_online') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('kominfo_siemon')->table('lap_monev_perangkat_online')->insert(
                        ['jenis' => $data[$i][0],
                        'sertifikat' => $data[$i][1],
                        'non_sertifikat' => $data[$i][2],
                        'bulan' => $data[$i][3],
                        'tahun' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ($jenis == 'rekap_lap_mon_perangkat_upt') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('kominfo_siemon')->table('rekap_lap_mon_perangkat_upt')->insert(
                        ['upt' => $data[$i][0],
                        'pelaksanaan' => $data[$i][1],
                        'terindentifikasi' => $data[$i][2],
                        'legal' => $data[$i][3],
                        'legal_tidak_berlabel' => $data[$i][4],
                        'bulan' => $data[$i][5],
                        'tahun' => $data[$i][6]],
                    );
                }
                return $result;
            } elseif ($jenis == 'rekap_lap_montib_perangkat_upt') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('kominfo_siemon')->table('rekap_lap_montib_perangkat_upt')->insert(
                        ['upt' => $data[$i][0],
                        'jumlah_pelaksanaan_monitoring' => $data[$i][1],
                        'jumlah_perangkat_terindentifikasi' => $data[$i][2],
                        'bersertifikat_berlabel' => $data[$i][3],
                        'bersertifikat_tidak_sesuai_spesifikasi_teknis' => $data[$i][4],
                        'tidak_bersertifikat' => $data[$i][5],
                        'jumlah_penertiban' => $data[$i][6],
                        'surat_teguran_penanganan' => $data[$i][7],
                        'penyegelan_perangkat' => $data[$i][8],
                        'pengamanan_atau_penyitaan_perangkat' => $data[$i][9],
                        'persentase_penyelesaian_penanganan_pelanggaran_perangkat' => $data[$i][10],
                        'bulan' => $data[$i][11],
                        'tahun' => $data[$i][12]],
                    );
                }
                return $result;
            }

            break;
        case 'kominfo_simpeg':
            if ($jenis == '#Tableau_10_sid_00000494_4_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_10_sid_00000494_4_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_12_sid_00000492_2_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_12_sid_00000492_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_12_sid_00000492_3_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_12_sid_00000492_3_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_12_sid_00000496_1_Group') {
                for ($i=1; $i < count($data); $i++)  {
                    $result = DB::connection('simpeg')->table('#Tableau_12_sid_00000496_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_12_sid_00000496_2_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_12_sid_00000496_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_12_sid_00000496_3_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_12_sid_00000496_3_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_12_sid_00000496_4_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_12_sid_00000496_4_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_0000019B_4_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_0000019B_4_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_000001EB_4_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_000001EB_4_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_000001EB_5_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_000001EB_5_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00000493_6_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00000493_6_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00000537_4_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00000537_4_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00000537_5_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00000537_5_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00000556_4_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00000556_4_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00000556_5_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00000556_5_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00000556_6_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00000556_6_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00000763_4_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00000763_4_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00000763_5_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00000763_5_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00002306_4_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00002306_4_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00002306_5_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00002306_5_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00002306_6_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00002306_6_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_13_sid_00002306_7_Group') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_13_sid_00002306_7_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_14_sid_00000168_4_Group'){
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_14_sid_00000168_4_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_14_sid_00000175_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_14_sid_00000175_4_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_14_sid_0000017E_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_14_sid_0000017E_4_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_14_sid_00000490_5_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_14_sid_00000490_5_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_14_sid_00000490_6_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_14_sid_00000490_6_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_14_sid_00000497_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_14_sid_00000497_3_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_000001F0_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_000001F0_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_000001F0_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_000001F0_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_00000491_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_00000491_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_00000495_5_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_00000495_5_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_00000538_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_00000538_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_00000538_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_00000538_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_00000558_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_00000558_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_00000558_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_00000558_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_00000558_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_00000558_3_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_00000768_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_00000768_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],

                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_00000768_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_00000768_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_00000768_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_00000768_3_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_15_sid_0000230C_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_15_sid_0000230C_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_00000169_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_00000169_1_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_00000176_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_00000176_1_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_0000017F_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_0000017F_1_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_000001A6_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_000001A6_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_000001ED_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_000001ED_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_00000499_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_00000499_3_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_00000559_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_00000559_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_00000559_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_00000559_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_00000559_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_00000559_3_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_0000076A_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_0000076A_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_0000076A_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_0000076A_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_16_sid_0000230A_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_16_sid_0000230A_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00000172_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00000172_4_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_000001F3_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_000001F3_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_000001F3_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_000001F3_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_000003A5_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_000003A5_4_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00000498_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00000498_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00000498_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00000498_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00000498_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00000498_3_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00000539_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00000539_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00000539_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00000539_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00000557_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00000557_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00000557_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00000557_2_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00000557_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00000557_3_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00000769_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00000769_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00000769_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00000769_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_00002313_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_00002313_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_17_sid_0000E204_3_Connect_CheckCreateTempTableCap'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_17_sid_0000E204_3_Connect_CheckCreateTempTableCap')->insert(
                        ['COL' => $data[$i][0]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_18_sid_000001F1_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_18_sid_000001F1_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_18_sid_000001F1_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_18_sid_000001F1_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_18_sid_0000049B_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_18_sid_0000049B_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_18_sid_0000049B_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_18_sid_0000049B_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_18_sid_0000049B_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_18_sid_0000049B_3_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_18_sid_000053B3_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_18_sid_000053B3_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_18_sid_000053B3_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_18_sid_000053B3_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_00000173_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_00000173_1_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_000001A9_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_000001A9_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_000001EF_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_000001EF_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_000001EF_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_000001EF_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_000003A6_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_000003A6_1_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_0000049A_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_0000049A_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_0000049A_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_0000049A_3_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_0000049A_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_0000049A_4_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_00000540_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_00000540_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_0000055B_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_0000055B_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_00000772_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_00000772_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_000053B0_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_000053B0_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_000053B0_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_000053B0_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_000053B0_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_000053B0_3_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_19_sid_000053B0_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_19_sid_000053B0_4_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_000001A3_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_000001A3_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_000001A3_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_000001A3_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_000001AC_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_000001AC_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_000001AC_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_000001AC_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_000001EE_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_000001EE_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_000001EE_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_000001EE_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_00000456_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_00000456_4_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_00000456_5_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_00000456_5_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_00000456_6_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_00000456_6_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_00000456_7_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_00000456_7_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_0000049D_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_0000049D_1_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_0000049D_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_0000049D_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_0000053B_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_0000053B_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_0000053B_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_0000053B_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_00000563_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_00000563_1_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_00000563_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_00000563_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_00000775_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_00000775_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_00000775_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_00000775_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_00002309_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_00002309_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_000053AF_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_000053AF_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_000053AF_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_000053AF_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_20_sid_000053AF_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_20_sid_000053AF_3_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_00000097_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_00000097_4_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_000001A1_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_000001A1_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_000001A1_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_000001A1_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_000001A1_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_000001A1_3_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_000001A8_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_000001A8_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_000001EC_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_000001EC_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_000001EC_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_000001EC_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_0000049E_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_0000049E_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_0000049E_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_0000049E_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_00000565_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_00000565_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_00000565_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_00000565_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_00002314_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_00002314_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_00002314_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_00002314_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_000053B2_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_000053B2_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_21_sid_000053B2_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_21_sid_000053B2_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_00000098_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_00000098_1_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_0000019F_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_0000019F_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_0000019F_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_0000019F_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_000001F2_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_000001F2_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_0000045A_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_0000045A_1_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_0000045A_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_0000045A_2_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_0000045A_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_0000045A_3_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_0000045A_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_0000045A_4_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_0000049C_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_0000049C_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_00000543_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_00000543_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_00000543_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_00000543_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_00000562_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_00000562_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_00000562_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_00000562_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_00000562_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_00000562_3_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_0000076E_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_0000076E_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_0000076E_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_0000076E_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_0000230F_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_0000230F_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_0000230F_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_0000230F_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_000053AE_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_000053AE_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_000053AE_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_000053AE_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_22_sid_000053AE_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_22_sid_000053AE_3_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_00000099_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_00000099_1_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_000001A4_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_000001A4_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_000001A4_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_000001A4_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_000001A4_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_000001A4_3_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_000001AE_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_000001AE_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_000001AE_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_000001AE_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_0000049F_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_0000049F_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_0000049F_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_0000049F_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_0000049F_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_0000049F_3_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_0000049F_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_0000049F_4_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_0000053C_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_0000053C_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_0000053C_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_0000053C_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_0000055F_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_0000055F_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_0000055F_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_0000055F_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_0000055F_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_0000055F_3_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_23_sid_00002308_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_23_sid_00002308_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000001A0_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000001A0_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000001A0_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000001A0_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000001A0_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000001A0_3_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000001A0_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000001A0_4_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000001AD_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000001AD_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000001F9_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000001F9_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000001F9_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000001F9_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000004A1_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000004A1_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000004A1_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000004A1_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000004A1_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000004A1_3_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000004A1_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000004A1_4_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_0000053E_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_0000053E_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_0000055E_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_0000055E_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_0000055E_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_0000055E_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_0000076C_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_0000076C_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000053B1_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000053B1_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'Nama (Ta Unit) (group)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_24_sid_000053B1_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_24_sid_000053B1_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_25_sid_0000009A_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_25_sid_0000009A_4_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_25_sid_000001A2_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_25_sid_000001A2_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_25_sid_000001A2_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_25_sid_000001A2_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_25_sid_000001FA_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_25_sid_000001FA_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_25_sid_000001FA_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_25_sid_000001FA_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_25_sid_000004A0_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_25_sid_000004A0_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_25_sid_0000053D_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_25_sid_0000053D_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_25_sid_0000053D_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_25_sid_0000053D_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_25_sid_00000564_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_25_sid_00000564_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_25_sid_00000774_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_25_sid_00000774_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_25_sid_00000774_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_25_sid_00000774_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_26_sid_0000009B_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_26_sid_0000009B_1_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_26_sid_000001F4_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_26_sid_000001F4_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_26_sid_00000545_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_26_sid_00000545_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_26_sid_00000545_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_26_sid_00000545_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_26_sid_0000055A_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_26_sid_0000055A_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_26_sid_00000773_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_26_sid_00000773_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_26_sid_00002307_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_26_sid_00002307_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_26_sid_00002307_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_26_sid_00002307_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_27_sid_0000009C_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_27_sid_0000009C_1_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_27_sid_000001F5_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_27_sid_000001F5_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_27_sid_00000542_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_27_sid_00000542_1_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_27_sid_00000542_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_27_sid_00000542_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_27_sid_00000561_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_27_sid_00000561_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_27_sid_00000561_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_27_sid_00000561_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_27_sid_0000076B_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_27_sid_0000076B_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_28_sid_0000009D_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_28_sid_0000009D_1_Group')->insert(
                        ['Age (group)' => $data[$i][0],
                        'Calculation_1155736310091309056' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_28_sid_000001F8_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_28_sid_000001F8_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_28_sid_000001F8_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_28_sid_000001F8_2_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_28_sid_0000053A_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_28_sid_0000053A_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_28_sid_00000560_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_28_sid_00000560_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_28_sid_00000776_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_28_sid_00000776_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_28_sid_0000230D_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_28_sid_0000230D_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_29_sid_000001F6_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_29_sid_000001F6_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_29_sid_00000544_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_29_sid_00000544_1_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_29_sid_00000544_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_29_sid_00000544_2_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_29_sid_00000544_3_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_29_sid_00000544_3_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_29_sid_0000055D_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_29_sid_0000055D_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_29_sid_0000076F_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_29_sid_0000076F_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_30_sid_00000541_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_30_sid_00000541_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_30_sid_00000541_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_30_sid_00000541_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_30_sid_0000055C_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_30_sid_0000055C_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_30_sid_00000770_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_30_sid_00000770_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_30_sid_00000770_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_30_sid_00000770_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_31_sid_0000053F_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_31_sid_0000053F_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_31_sid_0000053F_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_31_sid_0000053F_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_37_sid_00000203_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_37_sid_00000203_4_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_37_sid_00000203_5_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_37_sid_00000203_5_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_38_sid_00000204_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_38_sid_00000204_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_38_sid_00000204_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_38_sid_00000204_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_39_sid_00000206_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_39_sid_00000206_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_39_sid_00000206_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_39_sid_00000206_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_40_sid_00000205_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_40_sid_00000205_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_40_sid_00000205_2_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_40_sid_00000205_2_Group')->insert(
                        ['Nama (Ta Pendidikan) (group)' => $data[$i][0],
                        'nama (ta_pendidikan)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_41_sid_00000207_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_41_sid_00000207_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_42_sid_00000208_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_42_sid_00000208_1_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_5_sid_0000005B_3_Connect_CheckCreateTempTableCap'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_5_sid_0000005B_3_Connect_CheckCreateTempTableCap')->insert(
                        ['COL' => $data[$i][0]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_6_sid_00000192_4_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_6_sid_00000192_4_Group')->insert(
                        ['unit kerja (group)' => $data[$i][0],
                        'Calculation_3517592839354318850' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_8_sid_00000193_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('data_ipfr')->insert(
                        ['unit kerja (group)' => $data[$i][0],
                        'Calculation_3517592839354318850' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_8_sid_00000441_10_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_8_sid_00000441_10_Group')->insert(
                        ['Umur (group)' => $data[$i][0],
                        'Calculation_1256504300034912269' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_8_sid_00000441_8_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_8_sid_00000441_8_Group')->insert(
                        ['if null nama unit (group)' => $data[$i][0],
                        'Calculation_1256504300020723723' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == '#Tableau_8_sid_00000441_9_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('#Tableau_8_sid_00000441_9_Group')->insert(
                        ['Nama (Ta Unit) (group)' => $data[$i][0],
                        'nama (ta_unit)' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'riwayat_pendidikan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('riwayat_pendidikan')->insert(
                        ['nip' => $data[$i][0],
                        'tahun_lulus' => $data[$i][1],
                        'kode_tingkat' => $data[$i][2],
                        'kode_jurusan' => $data[$i][3],
                        'jurusan' => $data[$i][4],
                        'nama_Sekolah' => $data[$i][5],
                        'pimpinan' => $data[$i][6],
                        'kota_sekolah' => $data[$i][7],
                        'nomor_ijazah' => $data[$i][8],
                        'tgl_ijazah' => $data[$i][9],
                        'ipk_nem' => $data[$i][10],
                        'disetujui' => $data[$i][11],
                        'waktu_simpan' => $data[$i][12],
                        'id_pendidikan' => $data[$i][13]],
                    );
                }
                return $result;
            } elseif ($jenis == 't_pns'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('t_pns')->insert(
                        ['nip' => $data[$i][0],
                        'nomor_sk_pns' => $data[$i][1],
                        'tgl_sk_pns' => $data[$i][2],
                        'kode_golongan' => $data[$i][3],
                        'kode_pejabat' => $data[$i][4],
                        'kode_sumpah' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_angka_kredit'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_angka_kredit')->insert(
                        ['nip' => $data[$i][0],
                        'tgl_penetapan' => $data[$i][1],
                        'pak_1a1' => $data[$i][2],
                        'pak_1a2' => $data[$i][3],
                        'pak_1b' => $data[$i][4],
                        'pak_1c' => $data[$i][5],
                        'pak_1d' => $data[$i][6],
                        'pak_1e' => $data[$i][7],
                        'pak_2' => $data[$i][8],
                        'catatan' => $data[$i][9],
                        'kode_pejabat' => $data[$i][10],
                        'path_filee' => $data[$i][11],
                        'disetujui' => $data[$i][12]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_bagian'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_bagian')->insert(
                        ['kode_bagian' => $data[$i][0],
                        'nama_bagian' => $data[$i][1],
                        'kode_unit' => $data[$i][2],
                        'aktif' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_bahasa'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_bahasa')->insert(
                        ['nip' => $data[$i][0],
                        'nama_bahasa' => $data[$i][1],
                        'jenis_bahasa' => $data[$i][2],
                        'kemampuan_bahasa' => $data[$i][3],
                        'id_bahasa' => $data[$i][4],
                        'waktu_simpan' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_cabang'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_cabang')->insert(
                        ['kode_cabang' => $data[$i][0],
                        'nama_cabang' => $data[$i][1],
                        'alamat_cabang' => $data[$i][2],
                        'tlp' => $data[$i][3],
                        'nama_penuh' => $data[$i][4],
                        'kecamatan' => $data[$i][5],
                        'kabupaten' => $data[$i][6],
                        'provinsi' => $data[$i][7],
                        'id_kab_kota' => $data[$i][8]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_cpns'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_cpns')->insert(
                        ['nip' => $data[$i][0],
                        'nomor_nota_pers_bkn' => $data[$i][1],
                        'tgl_nota' => $data[$i][2],
                        'nomor_sk_cpns' => $data[$i][3],
                        'tgl_sk_cpns' => $data[$i][4],
                        'kode_golongan' => $data[$i][5],
                        'tmt_cpns' => $data[$i][6],
                        'kode_pejabat' => $data[$i][7],
                        'path_file' => $data[$i][8]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_departemen'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_departemen')->insert(
                        ['kode_departemen' => $data[$i][0],
                        'nama_departemen' => $data[$i][1],
                        'kode_tree' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_diklat_eselon'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_diklat_eselon')->insert(
                        ['kode_eselon' => $data[$i][0],
                        'tunjangan_eselon' => $data[$i][1],
                        'nilai_bopt' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_diklat_fungsional'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_diklat_fungsional')->insert(
                        ['kode_diklat_fungsional' => $data[$i][0],
                        'nama_diklat_fungsional' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_diklat_struktural'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_diklat_struktural')->insert(
                        ['kode_diklat_struktural' => $data[$i][0],
                        'nama_diklat_struktural' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_diklat_teknis'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_diklat_teknis')->insert(
                        ['kode_diklat_teknis' => $data[$i][0],
                        'nama_diklat_teknis' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_golongan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_golongan')->insert(
                        ['kode_golongan' => $data[$i][0],
                        'nama_golongan' => $data[$i][1],
                        'nilai_bopt' => $data[$i][2],
                        'pajak_golongan' => $data[$i][3],
                        'tarif_makan' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_jabatan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_jabatan')->insert(
                        ['kode_jabatan' => $data[$i][0],
                        'nama_jabatan' => $data[$i][1],
                        'tarif_makan' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_jasa'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_jasa')->insert(
                        ['id_jasa' => $data[$i][0],
                        'nip' => $data[$i][1],
                        'tgl_sk' => $data[$i][2],
                        'nomor_sk' => $data[$i][3],
                        'asal_jasa' => $data[$i][4],
                        'nama_jasa' => $data[$i][5],
                        'kode_pejabat' => $data[$i][6],
                        'path_file' => $data[$i][7],
                        'disetujui' => $data[$i][8]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_jenis_jabatan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_jenis_jabatan')->insert(
                        ['kode_jenis_jabatan' => $data[$i][0],
                        'nama_jenis_jabatan' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_jenis_jasa'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_jenis_jasa')->insert(
                        ['kode_jenis_jasa' => $data[$i][0],
                        'nama_tanda_jasa' => $data[$i][1],
                        'moda' => $data[$i][2],
                        'nama_operator' => $data[$i][3],
                        'jenis' => $data[$i][4],
                        'area' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_jenis_kenaikan_pangkat'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_jenis_kenaikan_pangkat')->insert(
                        ['kode_jenis_kenaikan_pangkat' => $data[$i][0],
                        'nama_jenis_kenaikan' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_jurusan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_jurusan')->insert(
                        ['kode_jurusan' => $data[$i][0],
                        'nama' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_karyawan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_karyawan')->insert(
                        ['nip'=>$data[$i][0],
                        'kode_departemen'=>$data[$i][1],
                        'kode_jabatan'=>$data[$i][2],
                        'kode_golongan'=>$data[$i][3],
                        'kode_cabang'=>$data[$i][4],
                        'nama'=>$data[$i][5],
                        'alamat1'=>$data[$i][6],
                        'rtw1'=>$data[$i][7],
                        'kel'=>$data[$i][8],
                        'kec'=>$data[$i][9],
                        'kota1'=>$data[$i][10],
                        'kdpos'=>$data[$i][11],
                        'propinsi'=>$data[$i][12],
                        'negara1'=>$data[$i][13],
                        'tlp1'=>$data[$i][14],
                        'alamat2'=>$data[$i][15],
                        'rtw2'=>$data[$i][16],
                        'kel2'=>$data[$i][17],
                        'kec2'=>$data[$i][18],
                        'kota2'=>$data[$i][19],
                        'kdpos2'=>$data[$i][20],
                        'pvs2'=>$data[$i][21],
                        'negara2'=>$data[$i][22],
                        'tlp2'=>$data[$i][23],
                        'tmpt_lahir'=>$data[$i][24],
                        'tgl_lahir'=>$data[$i][25],
                        'npwp'=>$data[$i][26],
                        'jk'=>$data[$i][27],
                        'agama'=>$data[$i][28],
                        'no_hp'=>$data[$i][29],
                        'email1'=>$data[$i][30],
                        'email2'=>$data[$i][31],
                        'no_ktp'=>$data[$i][32],
                        'kebangsaan'=>$data[$i][33],
                        'pendidikan'=>$data[$i][34],
                        'gol'=>$data[$i][35],
                        'tgl_msk'=>$data[$i][36],
                        'status_masuk'=>$data[$i][37],
                        'status_gaji'=>$data[$i][38],
                        'status_kerja'=>$data[$i][39],
                        'komponen'=>$data[$i][40],
                        'metode'=>$data[$i][41],
                        'penghasilan'=>$data[$i][42],
                        'pph_sblmnya'=>$data[$i][43],
                        'tgl_berhenti'=>$data[$i][44],
                        'sts_brhnti'=>$data[$i][45],
                        'wkt_pecbaan'=>$data[$i][46],
                        'spgr'=>$data[$i][47],
                        'status_nikah'=>$data[$i][48],
                        'jumlah_anak'=>$data[$i][49],
                        'tanggungan'=>$data[$i][50],
                        'kode_byr'=>$data[$i][51],
                        'kode_bank'=>$data[$i][52],
                        'no_rek'=>$data[$i][53],
                        'keluar'=>$data[$i][54],
                        'gelar_dpn'=>$data[$i][55],
                        'gelar_blkg'=>$data[$i][56],
                        'kd_sts_pgw'=>$data[$i][57],
                        'kd_kdk_pgw'=>$data[$i][58],
                        'no_karpeg'=>$data[$i][59],
                        'no_akses'=>$data[$i][60],
                        'no_taspen'=>$data[$i][61],
                        'no_karis_karsu'=>$data[$i][62],
                        'disetujui'=>$data[$i][63],
                        'waktu_simpan'=>$data[$i][64],
                        'kode_unit'=>$data[$i][65],
                        'kode_bagian'=>$data[$i][66],
                        'kode_eselon'=>$data[$i][67],
                        'kode_subbagian'=>$data[$i][68],
                        'jabatan'=>$data[$i][69],
                        'jbt_struktural'=>$data[$i][70],
                        'tinggi'=>$data[$i][71],
                        'bb'=>$data[$i][72],
                        'hobby'=>$data[$i][73],
                        'pin'=>$data[$i][74],
                        'non_aktif'=>$data[$i][75],
                        'kode_jabatan_plt'=>$data[$i][76],
                        'kode_tgs'=>$data[$i][77],
                        'penyetaraan'=>$data[$i][78],
                        'kode_tim_kerja'=>$data[$i][79]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_kedudukan_pegawai'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_kedudukan_pegawai')->insert(
                        ['kode_kedudukan_pegawai' => $data[$i][0],
                        'nama' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_pendidikan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_pendidikan')->insert(
                        ['kode_pendidikan' => $data[$i][0],
                        'nama' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_penilaian'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_penilaian')->insert(
                        ['nip'=>$data[$i][0],
                        'tgl_nilai'=>$data[$i][1],
                        'kesetiaan'=>$data[$i][2],
                        'prestasi'=>$data[$i][3],
                        'ketaatan'=>$data[$i][4],
                        'tgg_jwb'=>$data[$i][6],
                        'kejujuran'=>$data[$i][7],
                        'krj_sama'=>$data[$i][8],
                        'prakarsa'=>$data[$i][9],
                        'kepimpinan'=>$data[$i][10],
                        'catatan'=>$data[$i][11],
                        'kode_penilaian'=>$data[$i][12],
                        'path_file'=>$data[$i][13],
                        'disetujui'=>$data[$i][14]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_riwayat_diklat_fungsional'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_riwayat_diklat_fungsional')->insert(
                        ['nip' =>$data[$i][0],
                        'tgl_mulai' =>$data[$i][1],
                        'tgl_selesai' =>$data[$i][2],
                        'kode_diklat' =>$data[$i][3],
                        'tempat' =>$data[$i][4],
                        'penyelengara' =>$data[$i][5],
                        'angkatan' =>$data[$i][6],
                        'jml_jam' =>$data[$i][7],
                        'satuan' =>$data[$i][8],
                        'nomor_sttp' =>$data[$i][9],
                        'tgl_sttp' =>$data[$i][10],
                        'disetujui' =>$data[$i][11],
                        'id_riwayat' =>$data[$i][12],
                        'path_file' =>$data[$i][13]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_riwayat_diklat_struktural'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_riwayat_diklat_struktural')->insert(
                        ['nip' => $data[$i][0],
                        'tgl_mulai' => $data[$i][1],
                        'tgl_selesai' => $data[$i][2],
                        'kode_diklat' => $data[$i][3],
                        'tempat' => $data[$i][4],
                        'penyelengara' => $data[$i][5],
                        'angkatan' => $data[$i][6],
                        'jml_jam' => $data[$i][7],
                        'satuan' => $data[$i][8],
                        'nomor_sttp' => $data[$i][9],
                        'tgl_sttp' => $data[$i][10],
                        'disetujui' => $data[$i][11],
                        'id_riwayat' => $data[$i][12],
                        'path_file' => $data[$i][13]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_riwayat_diklat_teknis'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_riwayat_diklat_teknis')->insert(
                        ['nip' => $data[$i][0],
                        'tgl_mulai' => $data[$i][1],
                        'tgl_selesai' => $data[$i][2],
                        'kode_diklat' => $data[$i][3],
                        'tempat' => $data[$i][4],
                        'penyelengara' => $data[$i][5],
                        'angkatan' => $data[$i][6],
                        'jml_jam' => $data[$i][7],
                        'satuan' => $data[$i][8],
                        'nomor_sttp' => $data[$i][9],
                        'tgl_sttp' => $data[$i][10],
                        'disetujui' => $data[$i][11],
                        'id_riwayat' => $data[$i][12],
                        'path_file' => $data[$i][13]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_riwayat_seminar'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_riwayat_seminar')->insert(
                        ['nip' =>$data[$i][0],
                        'tgl_mulai' =>$data[$i][1],
                        'tgl_selesai' =>$data[$i][2],
                        'kode_diklat' =>$data[$i][3],
                        'tempat' =>$data[$i][4],
                        'penyelengara' =>$data[$i][5],
                        'angkatan' =>$data[$i][6],
                        'jml_jam' =>$data[$i][7],
                        'satuan' =>$data[$i][8],
                        'nomor_sttp' =>$data[$i][9],
                        'tgl_sttp' =>$data[$i][10],
                        'disetujui' =>$data[$i][11],
                        'id_riwayat' =>$data[$i][12],
                        'path_file' =>$data[$i][13]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_sklain'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_sklain')->insert(
                        ['id_sklain' => $data[$i][0],
                        'nip' => $data[$i][1],
                        'nomor_sklain' => $data[$i][2],
                        'tgl_sklain' => $data[$i][3],
                        'jenis_sklain' => $data[$i][4],
                        'tahun' => $data[$i][5],
                        'path_file' => $data[$i][6],
                        'disetujui' => $data[$i][7]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_skp'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_skp')->insert(
                        ['nip' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'nilai_capaian' => $data[$i][2],
                        'orientasi' => $data[$i][3],
                        'integritas' => $data[$i][4],
                        'kotmitmen' => $data[$i][5],
                        'disiplin' => $data[$i][6],
                        'kerjasama' => $data[$i][7],
                        'kepimimpinan' => $data[$i][8],
                        'nilai_perilaku_kerja' => $data[$i][9],
                        'nilai_prestasi_kerja' => $data[$i][10],
                        'id_skp' => $data[$i][11],
                        'path_file' => $data[$i][12],
                        'disetujui' => $data[$i][13]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_status_pegawai'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_status_pegawai')->insert(
                        ['kode_status' => $data[$i][0],
                        'nama_status' => $data[$i][1],
                        'prosen_grade' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_stlud'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_stlud')->insert(
                        ['kode_status' => $data[$i][0],
                        'keterangan' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_subbagian'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_subbagian')->insert(
                        ['kode_status' => $data[$i][0],
                        'nama_subbagian' => $data[$i][1],
                        'kode_bagian' => $data[$i][2],
                        'aktif' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_tgs_luar_negri'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_tgs_luar_negri')->insert(
                        ['id_tugas' => $data[$i][0],
                        'nip' => $data[$i][1],
                        'tgl_mulai' => $data[$i][2],
                        'tgl_selesai' => $data[$i][3],
                        'negara' => $data[$i][4],
                        'jenis_kunjungan' => $data[$i][5],
                        'kode_pejabat' => $data[$i][6],
                        'nomor_sk' => $data[$i][7],
                        'tgl_sk' => $data[$i][8],
                        'jml_lama' => $data[$i][9],
                        'satuan' => $data[$i][10],
                        'sumber' => $data[$i][11],
                        'tahun' => $data[$i][12],
                        'path_file' => $data[$i][13],
                        'disetujui' => $data[$i][14]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_tim_kerja'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('ta_tim_kerja')->insert(
                        ['kode' => $data[$i][0],
                        'nama' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ($jenis == 'ta_unit'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('simpeg')->table('data_ipfr')->insert(
                        ['kode' => $data[$i][0],
                        'nama' => $data[$i][1],
                        'kode_cabang' => $data[$i][2],
                        'aktif' => $data[$i][3]],
                    );
                }
                return $result;
            }
            break;
        case 'kominfo_staging':
            if ( $jenis == '#Tableau_48_sid_00007B36_4_Group'){
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('#Tableau_48_sid_00007B36_4_Group')->insert(
                        ['Location2 (group)' => $data[$i][0],
                        'location' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ( $jenis == '#Tableau_69_sid_00007B3E_1_Group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('#Tableau_69_sid_00007B3E_1_Group')->insert(
                        ['Location2 (group)' => $data[$i][0],
                        'location' => $data[$i][1]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'data_mon_hf'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('data_mon_hf')->insert(
                        ['stasiun_monitoring' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'jumlah' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'data_sertifikasi'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('data_sertifikasi')->insert(
                        ['id' => $data[$i][0],
                        'plg_id' => $data[$i][1],
                        'nib' => $data[$i][2],
                        'nomor_sertifikat' => $data[$i][3],
                        'tgl_sertifikat' => $data[$i][4],
                        'resertifikasi' => $data[$i][5],
                        'nama_perangkat' => $data[$i][6],
                        'merek' => $data[$i][7],
                        'model' => $data[$i][8],
                        'nama_dagang' => $data[$i][9],
                        'jenis_permohonan' => $data[$i][10],
                        'kelompok_perangkat' => $data[$i][11],
                        'peruntukan' => $data[$i][12],
                        'hs_code' => $data[$i][13],
                        'nama_perusahaan' => $data[$i][14],
                        'nama_pabrikan' => $data[$i][15],
                        'negara_pabrikan' => $data[$i][16],
                        'balai_uji_lhu' => $data[$i][17],
                        'negara_balai_uji_lhu' => $data[$i][18],
                        'balai_uji_lhu_dua' => $data[$i][19],
                        'negara_balai_uji_lhu_dua' => $data[$i][20],
                        'balai_uji_emc' => $data[$i][21],
                        'balai_uji_safety' => $data[$i][22],
                        'negara_balai_uji_safety' => $data[$i][23],
                        'frekuensi' => $data[$i][24]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_angkatan_kerja_jenis_kelamin'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_angkatan_kerja_jenis_kelamin')->insert(
                        ['id'=> $data[$i][0],
                        'btl'=> $data[$i][1],
                        'gk'=> $data[$i][2],
                        'jenis_kelamin'=> $data[$i][3],
                        'jumlah'=> $data[$i][4],
                        'kp'=> $data[$i][5],
                        'slm'=> $data[$i][6],
                        'tahun'=> $data[$i][7],
                        'yk'=> $data[$i][8]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_angkatan_kerja_pendidikan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_angkatan_kerja_pendidikan')->insert(
                        ['id'=> $data[$i][0],
                        'jumlah'=> $data[$i][1],
                        'laki'=> $data[$i][2],
                        'perempuan'=> $data[$i][3],
                        'tahun'=> $data[$i][4],
                        'tingkat_pendidikan'=> $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_angkatan_kerja_umur'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_angkatan_kerja_umur')->insert(
                        ['id' => $data[$i][0],
                        'jumlah' => $data[$i][1],
                        'laki' => $data[$i][2],
                        'perempuan' => $data[$i][3],
                        'perempuan' => $data[$i][4],
                        'kelompok_umur' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_angkatan_kerja_wilayah'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_angkatan_kerja_wilayah')->insert(
                        ['id' => $data[$i][0],
                        'jumlah' => $data[$i][1],
                        'laki' => $data[$i][2],
                        'perempuan' => $data[$i][3],
                        'tahun' => $data[$i][4],
                        'kabupaten' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_kelamin'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_kelamin')->insert(
                        ['id'=>$data[$i][0],
                        'btl'=>$data[$i][1],
                        'gk'=>$data[$i][2],
                        'jenis_kelamin'=>$data[$i][3],
                        'jumlah'=>$data[$i][4],
                        'kp'=>$data[$i][5],
                        'slm'=>$data[$i][6],
                        'tahun'=>$data[$i][7],
                        'yk'=>$data[$i][8]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_migran'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_migran')->insert(
                        ['id'=>$data[$i][0],
                        'kp_laki'=>$data[$i][1],
                        'yk_perempuan'=>$data[$i][2],
                        'yk_laki'=>$data[$i][3],
                        'yk_jumlah'=>$data[$i][4],
                        'tahun'=>$data[$i][5],
                        'slm_perempuan'=>$data[$i][6],
                        'slm_laki'=>$data[$i][7],
                        'slm_jumlah'=>$data[$i][8],
                        'negara_tujuan'=>$data[$i][9],
                        'kp_perempuan'=>$data[$i][10],
                        'kp_jumlah'=>$data[$i][11],
                        'jml_perempuan'=>$data[$i][12],
                        'jml_laki'=>$data[$i][13],
                        'jml_jumlah'=>$data[$i][14],
                        'gk_perempuan'=>$data[$i][15],
                        'gk_laki'=>$data[$i][16],
                        'gk_jumlah'=>$data[$i][17],
                        'btl_perempuan'=>$data[$i][18],
                        'btl_laki'=>$data[$i][19],
                        'btl_jumlah'=>$data[$i][20]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_migran_asal'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_migran_asal')->insert(
                        ['id' => $data[$i][0],
                        'jumlah' => $data[$i][1],
                        'laki' => $data[$i][2],
                        'perempuan' => $data[$i][3],
                        'tahun' => $data[$i][4],
                        'kabupaten' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_migran_asal_tujuan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_migran_asal_tujuan')->insert(
                        ['id' => $data[$i][0],
                        'jumlah_kk' => $data[$i][1],
                        'jumlah_jiwa' => $data[$i][2],
                        'tahun' => $data[$i][3],
                        'kabupaten' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_migran_tujuan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_migran_tujuan')->insert(
                        ['id' => $data[$i][0],
                        'jumlah_kk' => $data[$i][1],
                        'jumlah_jiwa' => $data[$i][2],
                        'tahun' => $data[$i][3],
                        'kab_prov' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_pendidikan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_pendidikan')->insert(
                        ['id' => $data[$i][0],
                        'jumlah' => $data[$i][1],
                        'laki' => $data[$i][2],
                        'perempuan' => $data[$i][3],
                        'tahun' => $data[$i][4],
                        'tingkat_pendidikan' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_pengangguran_jenis_kelamin'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_pengangguran_jenis_kelamin')->insert(
                        ['id' => $data[$i][0],
                        'btl' => $data[$i][1],
                        'gk' => $data[$i][2],
                        'jenis_kelamin' => $data[$i][3],
                        'jumlah' => $data[$i][4],
                        'kp' => $data[$i][5],
                        'slm' => $data[$i][6],
                        'tahun' => $data[$i][7],
                        'yk' => $data[$i][8]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_pengangguran_pendidikan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_pengangguran_pendidikan')->insert(
                        ['id' => $data[$i][0],
                        'jumlah' => $data[$i][1],
                        'laki' => $data[$i][2],
                        'perempuan' => $data[$i][3],
                        'tahun' => $data[$i][4],
                        'tingkat_pendidikan' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_pengangguran_umur'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_pengangguran_umur')->insert(
                        ['id' =>$data[$i][0],
                        'jumlah' =>$data[$i][1],
                        'laki' =>$data[$i][2],
                        'perempuan' =>$data[$i][3],
                        'tahun' =>$data[$i][4],
                        'kelompok_umur' =>$data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_pengangguran_wilayah'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_pengangguran_wilayah')->insert(
                        ['id' =>$data[$i][0],
                        'jumlah' =>$data[$i][1],
                        'laki' =>$data[$i][2],
                        'perempuan' =>$data[$i][3],
                        'tahun' =>$data[$i][4],
                        'kabupaten' =>$data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_umur'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_umur')->insert(
                        ['id' => $data[$i][0],
                        'jumlah' => $data[$i][1],
                        'laki' => $data[$i][2],
                        'perempuan' => $data[$i][3],
                        'tahun' => $data[$i][4],
                        'kelompok_umur' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'disnaker_wilayah'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('disnaker_wilayah')->insert(
                        ['id' => $data[$i][0],
                        'jumlah' => $data[$i][1],
                        'laki' => $data[$i][2],
                        'perempuan' => $data[$i][3],
                        'tahun' => $data[$i][4],
                        'kabupaten' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'elapor_kabupaten'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('elapor_kabupaten')->insert(
                        ['id' => $data[$i][0],
                        'nama' => $data[$i][1],
                        'jmlKeluhan' => $data[$i][2],
                        'jmlTerbalas' => $data[$i][3],
                        'jmlBelumTerbalas' => $data[$i][4],
                        'jmlOntime' => $data[$i][5],
                        'jmlLateResponse' => $data[$i][6]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'elapor_kategori'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('elapor_kategori')->insert(
                        ['id'=> $data[$i][0],
                        'nama'=> $data[$i][1],
                        'jmlKeluhan'=> $data[$i][2],
                        'jmlTerbalas'=> $data[$i][3],
                        'jmlBelumTerbalas'=> $data[$i][4],
                        'jmlOntime'=> $data[$i][5],
                        'jmlLateResponse'=> $data[$i][6]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'elapor_koordinat'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('elapor_koordinat')->insert(
                        ['id' =>$data[$i][0],
                        'idk' =>$data[$i][1],
                        'isi' =>$data[$i][2],
                        'judul' =>$data[$i][3],
                        'lat' =>$data[$i][4],
                        'lon' =>$data[$i][5],
                        'sub_kategori' =>$data[$i][6],
                        'kategori' =>$data[$i][7],
                        'nama_file' =>$data[$i][8],
                        'image_path' =>$data[$i][9]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'elapor_listskpd'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('elapor_listskpd')->insert(
                        ['id'=> $data[$i][0],
                        'nama'=> $data[$i][1],
                        'jmlKeluhan'=> $data[$i][2],
                        'jmlTerbalas'=> $data[$i][3],
                        'jmlBelumTerbalas'=> $data[$i][4],
                        'jmlOntime'=> $data[$i][5],
                        'jmlLateResponse'=> $data[$i][6]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'event_penting'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('event_penting')->insert(
                        ['id' => $data[$i][0],
                        'pita_frekuensi' => $data[$i][1],
                        'frekuensi_mhz' => $data[$i][2],
                        'level_dbm' => $data[$i][3],
                        'penggunaan' => $data[$i][4],
                        'indentifikasi' => $data[$i][5],
                        'status' => $data[$i][6],
                        'kondisi' => $data[$i][7],
                        'jenis_indentifikasi' => $data[$i][8],
                        'jenis_event' => $data[$i][9],
                        'tahun' => $data[$i][10]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'frekuensi_terbanyak'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('frekuensi_terbanyak')->insert(
                        ['dinas' => $data[$i][0],
                        'total' => $data[$i][1],
                        'tahun' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'hasil_monitor'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('hasil_monitor')->insert(
                        ['dinas' => $data[$i][0],
                        'sub_service' => $data[$i][1],
                        'termonitor' => $data[$i][2],
                        'terindentifikasi' => $data[$i][3],
                        'legal' => $data[$i][4],
                        'illegal' => $data[$i][5],
                        'tahun' => $data[$i][6]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'hs_telekomunikasi'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('hs_telekomunikasi')->insert(
                        ['tahun' => $data[$i][0],
                        'kode_hs' => $data[$i][1],
                        'jenis' => $data[$i][2],
                        'total' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'koperasi_jenis'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('koperasi_jenis')->insert(
                        ['id' => $data[$i][0],
                        'koperasi' => $data[$i][1],
                        'yk' => $data[$i][2],
                        'volume_usaha' => $data[$i][3],
                        'triwulan' => $data[$i][4],
                        'slm' => $data[$i][5],
                        'tahun' => $data[$i][6],
                        'sisa_hasil_usaha' => $data[$i][7],
                        'rat' => $data[$i][8],
                        'pasif' => $data[$i][9],
                        'modal_sendiri' => $data[$i][10],
                        'modal_luar' => $data[$i][11],
                        'manajer_wanita' => $data[$i][12],
                        'manajer_pria' => $data[$i][13],
                        'kp' => $data[$i][14],
                        'aktif' => $data[$i][15],
                        'karyawan_wanita' => $data[$i][16],
                        'karyawan_pria' => $data[$i][17],
                        'jumlah_anggota' => $data[$i][18],
                        'jumlah_karyawan' => $data[$i][19],
                        'jumlah_manajer' => $data[$i][20],
                        'jml_ap' => $data[$i][21],
                        'gk' => $data[$i][22],
                        'diy' => $data[$i][23],
                        'btl' => $data[$i][24],
                        'asset' => $data[$i][25],
                        'anggota_wanita' => $data[$i][26],
                        'anggota_pria' => $data[$i][27]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'koperasi_kelompok'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('koperasi_kelompok')->insert(
                        ['id' => $data[$i][0],
                        'koperasi' => $data[$i][1],
                        'yk' => $data[$i][2],
                        'volume_usaha' => $data[$i][3],
                        'triwulan' => $data[$i][4],
                        'slm' => $data[$i][5],
                        'tahun' => $data[$i][6],
                        'sisa_hasil_usaha' => $data[$i][7],
                        'rat' => $data[$i][8],
                        'pasif' => $data[$i][9],
                        'modal_sendiri' => $data[$i][10],
                        'modal_luar' => $data[$i][11],
                        'manajer_wanita' => $data[$i][12],
                        'manajer_pria' => $data[$i][13],
                        'kp' => $data[$i][14],
                        'aktif' => $data[$i][15],
                        'karyawan_wanita' => $data[$i][16],
                        'karyawan_pria' => $data[$i][17],
                        'jumlah_anggota' => $data[$i][18],
                        'jumlah_karyawan' => $data[$i][19],
                        'jumlah_manajer' => $data[$i][20],
                        'jml_ap' => $data[$i][21],
                        'gk' => $data[$i][22],
                        'diy' => $data[$i][23],
                        'btl' => $data[$i][24],
                        'asset' => $data[$i][25],
                        'anggota_wanita' => $data[$i][26],
                        'anggota_pria' => $data[$i][27]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'koperasi_publik'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('koperasi_publik')->insert(
                        ['id' => $data[$i][0],
                        'koperasi' => $data[$i][1],
                        'volume_usaha' => $data[$i][2],
                        'triwulan' => $data[$i][3],
                        'slm' => $data[$i][4],
                        'tahun' => $data[$i][5],
                        'sisa_hasil_usaha' => $data[$i][6],
                        'rat' => $data[$i][7],
                        'pasif' => $data[$i][8],
                        'modal_sendiri' => $data[$i][9],
                        'modal_luar' => $data[$i][10],
                        'manajer_wanita' => $data[$i][11],
                        'manajer_pria' => $data[$i][12],
                        'aktif' => $data[$i][13],
                        'karyawan_wanita' => $data[$i][14],
                        'karyawan_pria' => $data[$i][15],
                        'jumlah_anggota' => $data[$i][16],
                        'jumlah_karyawan' => $data[$i][17],
                        'jumlah_manajer' => $data[$i][18],
                        'jml_ap' => $data[$i][19],
                        'asset' => $data[$i][20],
                        'anggota_wanita' => $data[$i][21],
                        'anggota_pria' => $data[$i][22]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'mon_hf'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('mon_hf')->insert(
                        ['administrasi' => $data[$i][0],
                        'kode' => $data[$i][1],
                        'tahun' => $data[$i][2],
                        'jumlah' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'pdb'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('pdb')->insert(
                        ['tahun' => $data[$i][0],
                        'pdb_lapangan' => $data[$i][1],
                        'triwulan1_harga_konstan' => $data[$i][2],
                        'triwulan2_harga_konstan' => $data[$i][3],
                        'triwulan3_harga_konstan' => $data[$i][4],
                        'triwulan4_harga_konstan' => $data[$i][5],
                        'tahunan_harga_konstan' => $data[$i][6],
                        'triwulan1_harga_harga_berlaku' => $data[$i][7],
                        'triwulan2_harga_harga_berlaku' => $data[$i][8],
                        'triwulan3_harga_harga_berlaku' => $data[$i][9],
                        'triwulan4_harga_harga_berlaku' => $data[$i][10],
                        'tahunan_harga_harga_berlaku' => $data[$i][11]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'penggunaan_frekuensi'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('penggunaan_frekuensi')->insert(
                        ['id' => $data[$i][0],
                        'client' => $data[$i][1],
                        'pita_frekuensi' => $data[$i][2],
                        'frek_tx' => $data[$i][3],
                        'frek_rx' => $data[$i][4],
                        'perangkat' => $data[$i][5],
                        'model' => $data[$i][6],
                        'brands' => $data[$i][7],
                        'desc' => $data[$i][8],
                        'jumlah' => $data[$i][9],
                        'stasiun' => $data[$i][10],
                        'jenis_penggunaan' => $data[$i][11],
                        'tahun' => $data[$i][12]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'penggunaan_frekuensi_2'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('penggunaan_frekuensi_2')->insert(
                        ['id' => $data[$i][0],
                        'penggunaan' => $data[$i][1],
                        'tipe_perangkat' => $data[$i][2],
                        'merk_perangkat' => $data[$i][3],
                        'rentang_mhz' => $data[$i][4],
                        'frekuensi' => $data[$i][5],
                        'desc' => $data[$i][6],
                        'client' => $data[$i][7],
                        'equipment' => $data[$i][8],
                        'penyelenggara' => $data[$i][9],
                        'tx' => $data[$i][10],
                        'rx' => $data[$i][11],
                        'location' => $data[$i][12],
                        'service' => $data[$i][13],
                        'jenis_penggunaan' => $data[$i][14]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'peraturan_sdppi'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('peraturan_sdppi')->insert(
                        ['nama_peraturan' => $data[$i][0],
                        'Peraturan' => $data[$i][1],
                        'tgl_penetapan' => $data[$i][2],
                        'tgl_pengundangan' => $data[$i][3],
                        'keterangan' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'periode_tahunan_bwa'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('periode_tahunan_bwa')->insert(
                        ['pita' => $data[$i][0],
                        'operator' => $data[$i][1],
                        'total' => $data[$i][2],
                        'tahun' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'perjanjian_sdppi'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('perjanjian_sdppi')->insert(
                        ['nama_perjanjian' => $data[$i][0],
                        'perjanjian' => $data[$i][1],
                        'tgl_penetapan' => $data[$i][2],
                        'tgl_pengundangan' => $data[$i][3],
                        'keterangan' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'pertumbuhan_pdb'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('pertumbuhan_pdb')->insert(
                        ['tahun' => $data[$i][0],
                        'pdb_lapangan' => $data[$i][1],
                        'triwulan1_kumulatif' => $data[$i][2],
                        'triwulan2_kumulatif' => $data[$i][3],
                        'triwulan3_kumulatif' => $data[$i][4],
                        'triwulan4_kumulatif' => $data[$i][5],
                        'tahunan_kumulatif' => $data[$i][6],
                        'triwulan1_berantai' => $data[$i][7],
                        'triwulan2_berantai' => $data[$i][8],
                        'triwulan3_berantai' => $data[$i][9],
                        'triwulan4_berantai' => $data[$i][10],
                        'tahunan_berantai' => $data[$i][11],
                        'triwulan1_dengan_triwulan' => $data[$i][12],
                        'triwulan2_dengan_triwulan' => $data[$i][13],
                        'triwulan3_dengan_triwulan' => $data[$i][14],
                        'triwulan4_dengan_triwulan' => $data[$i][15],
                        'tahunan_dengan_triwulan' => $data[$i][16]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'pita_frekuensi_by_tahun'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('pita_frekuensi_by_tahun')->insert(
                        ['pita' => $data[$i][0],
                        'termonitor' => $data[$i][1],
                        'terindentifikasi' => $data[$i][2],
                        'legal' => $data[$i][3],
                        'illegal' => $data[$i][4],
                        'tahun' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'refarming'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('refarming')->insert(
                        ['judul' => $data[$i][0],
                        'rentang_pita_sebelum' => $data[$i][1],
                        'wilayah_layanan_sebelum' => $data[$i][2],
                        'rentang_pita_setelah' => $data[$i][3],
                        'wilayah_layanan_setelah' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'rekap_frekuensi_by_tahun'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('rekap_frekuensi_by_tahun')->insert(
                        ['upt' => $data[$i][0],
                        'termonitor' => $data[$i][1],
                        'terindentifikasi' => $data[$i][2],
                        'legal' => $data[$i][3],
                        'illegal' => $data[$i][4],
                        'tahun' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ringkasan_apbn'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ringkasan_apbn')->insert(
                        ['judul' => $data[$i][0],
                        'apbn_2020' => $data[$i][1],
                        'perpes_54' => $data[$i][2],
                        'perpes_72' => $data[$i][3],
                        'lkpp' => $data[$i][4],
                        'apbn_2021' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sianti'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sianti')->insert(
                        ['nama' => $data[$i][0],
                        'total' => $data[$i][1],
                        'bulan' => $data[$i][2],
                        'tahun' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sibakul_cctv'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sibakul_cctv')->insert(
                        ['id' => $data[$i][0],
                        'idc' => $data[$i][1],
                        'location' => $data[$i][2],
                        'name' => $data[$i][3],
                        'stream-url' => $data[$i][4],
                        'stream-thumbnail' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sibakul_publik'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sibakul_publik')->insert(
                        ['id' => $data[$i][0],
                        'idp' => $data[$i][1],
                        'sektor_kehutanan' => $data[$i][2],
                        'tk_tenaga_borongan' => $data[$i][3],
                        'tk_perempuan' => $data[$i][4],
                        'tk_laki_laki' => $data[$i][5],
                        'tahun' => $data[$i][6],
                        'sektor_transportasi' => $data[$i][7],
                        'sektor_real_estate_usaha_persewaan' => $data[$i][8],
                        'sektor_pertanian' => $data[$i][9],
                        'sektor_perdagangan' => $data[$i][10],
                        'sektor_pariwisata' => $data[$i][11],
                        'sektor_konstruksi' => $data[$i][12],
                        'sektor_komunikasi' => $data[$i][13],
                        'sektor_kelautan_dan_perikanan' => $data[$i][14],
                        'aneka_usaha' => $data[$i][15],
                        'sektor_jasa_pendidikan' => $data[$i][16],
                        'sektor_jasa_kesehatan' => $data[$i][17],
                        'sektor_industri_pengolahan' => $data[$i][18],
                        'sektor_energi_dan_sumber_daya_mineral' => $data[$i][19],
                        'perdagangan' => $data[$i][20],
                        'nilai_omset' => $data[$i][21],
                        'jenis_data' => $data[$i][22],
                        'jasa_perorangan_yang_melayani_rumah_tangga' => $data[$i][23],
                        'industri_pertanian' => $data[$i][24],
                        'insdustri_non_pertanian' => $data[$i][25],
                        'ekonomi_kreatif' => $data[$i][26]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sibakul_survilance'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sibakul_survilance')->insert(
                        ['id' => $data[$i][0],
                        'type' => $data[$i][1],
                        'idc' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sibakul_survilance_bantul'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sibakul_survilance_bantul')->insert(
                        ['id' => $data[$i][0],
                        'type' => $data[$i][1],
                        'idc' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sibakul_survilance_kominfosleman'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sibakul_survilance_kominfosleman')->insert(
                        ['id' => $data[$i][0],
                        'type' => $data[$i][1],
                        'idc' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sibakul_survilance_kota'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sibakul_survilance_kota')->insert(
                        ['id' => $data[$i][0],
                        'type' => $data[$i][1],
                        'idc' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sibakul_survilance_kp'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sibakul_survilance_kp')->insert(
                        ['id' => $data[$i][0],
                        'type' => $data[$i][1],
                        'idc' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sibakul_survilance_malioboro'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sibakul_survilance_malioboro')->insert(
                        ['id' => $data[$i][0],
                        'type' => $data[$i][1],
                        'idc' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sibakul_survilance_sleman'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sibakul_survilance_sleman')->insert(
                        ['id' => $data[$i][0],
                        'type' => $data[$i][1],
                        'idc' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sibakul_survilance_sungai'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sibakul_survilance_sungai')->insert(
                        ['id' => $data[$i][0],
                        'type' => $data[$i][1],
                        'idc' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'sibakul_survilance_uptmalioboro'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('sibakul_survilance_uptmalioboro')->insert(
                        ['id' => $data[$i][0],
                        'type' => $data[$i][1],
                        'idc' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'smfr'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('smfr')->insert(
                        ['index' => $data[$i][0],
                        'unit_id' => $data[$i][1],
                        'provinsi_id' => $data[$i][2],
                        'kota_id' => $data[$i][3],
                        'kabupaten' => $data[$i][4],
                        'kecamatan' => $data[$i][5],
                        'kantor_pos' => $data[$i][6],
                        'site_address' => $data[$i][7],
                        'latitude' => $data[$i][8],
                        'longitude' => $data[$i][9],
                        'vendor' => $data[$i][10],
                        'tahun' => $data[$i][11],
                        'last_update' => $data[$i][12],
                        'site_id' => $data[$i][13],
                        'site_name' => $data[$i][14],
                        'site_type' => $data[$i][15]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'stasiun_hf'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('stasiun_hf')->insert(
                        ['site_name' => $data[$i][0],
                        'city' => $data[$i][1],
                        'stasiun_name' => $data[$i][2],
                        'coordinate' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'tibnas_dan_rol'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('tibnas_dan_rol')->insert(
                        ['upt' => $data[$i][0],
                        'provinsi' => $data[$i][1],
                        'tgl_kegiatan' => $data[$i][2],
                        'pengguna' => $data[$i][3],
                        'frekuensi' => $data[$i][4],
                        'dinas' => $data[$i][5],
                        'jenis_pelanggaran' => $data[$i][6],
                        'kab_kota' => $data[$i][7],
                        'status' => $data[$i][8],
                        'jenis_laporan' => $data[$i][9]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_disabilitas'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_disabilitas')->insert(
                        ['id' => $data[$i][0],
                        'disabilitas' => $data[$i][1],
                        'btl' => $data[$i][2],
                        'gk' => $data[$i][3],
                        'kp' => $data[$i][4],
                        'slm' => $data[$i][5],
                        'yk' => $data[$i][6],
                        'jumlah' => $data[$i][7],
                        'aset' => $data[$i][8],
                        'omset' => $data[$i][9],
                        'rerata_aset' => $data[$i][10],
                        'rerata_omset' => $data[$i][11]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_jenis_kelamin'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_jenis_kelamin')->insert(
                        ['id' => $data[$i][0],
                        'jenis_kelamin' => $data[$i][1],
                        'btl' => $data[$i][2],
                        'gk' => $data[$i][3],
                        'kp' => $data[$i][4],
                        'slm' => $data[$i][5],
                        'yk' => $data[$i][6],
                        'jumlah' => $data[$i][7],
                        'aset' => $data[$i][8],
                        'omset' => $data[$i][9],
                        'rerata_aset' => $data[$i][10],
                        'rerata_omset' => $data[$i][11]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_kabupaten'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_kabupaten')->insert(
                        ['id' => $data[$i][0],
                        'jumlah' => $data[$i][1],
                        'kabupaten' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_kelas'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_kelas')->insert(
                        ['id' => $data[$i][0],
                        'kelas' => $data[$i][1],
                        'btl' => $data[$i][2],
                        'gk' => $data[$i][3],
                        'kp' => $data[$i][4],
                        'slm' => $data[$i][5],
                        'yk' => $data[$i][6],
                        'jumlah' => $data[$i][7],
                        'aset' => $data[$i][8],
                        'omset' => $data[$i][9],
                        'rerata_aset' => $data[$i][10],
                        'rerata_omset' => $data[$i][11]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_klasifikasi'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_klasifikasi')->insert(
                        ['id' =>$data[$i][0],
                        'klasifikasi_usaha' =>$data[$i][1],
                        'btl' =>$data[$i][2],
                        'gk' =>$data[$i][3],
                        'kp' =>$data[$i][4],
                        'slm' =>$data[$i][5],
                        'yk' =>$data[$i][6],
                        'jumlah' =>$data[$i][7],
                        'aset' =>$data[$i][8],
                        'omset' =>$data[$i][9],
                        'rerata_aset' =>$data[$i][10],
                        'rerata_omset' =>$data[$i][11]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_laporan_dua'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_laporan_dua')->insert(
                        ['id' => $data[$i][0],
                        'diy' => $data[$i][1],
                        'kab_bantul' => $data[$i][2],
                        'kab_gkidul' => $data[$i][3],
                        'kab_kprogo' => $data[$i][4],
                        'kab_sleman' => $data[$i][5],
                        'kelas_binaan' => $data[$i][6],
                        'kota_yk' => $data[$i][7]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_laporan_empat'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_laporan_empat')->insert(
                        ['id' => $data[$i][0],
                        'harga_rata' => $data[$i][1],
                        'jml_produk' => $data[$i][2],
                        'kelompok_produk_markethub' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_laporan_enam'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_laporan_enam')->insert(
                        ['id' => $data[$i][0],
                        'jml_trans' => $data[$i][1],
                        'nilai_ongkir' => $data[$i][2],
                        'nilai_trans' => $data[$i][3],
                        'ratanilai_ongkir' => $data[$i][4],
                        'ratanilai_trans' => $data[$i][5],
                        'uraian' => $data[$i][6]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_laporan_lima'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_laporan_lima')->insert(
                        ['id' => $data[$i][0],
                        'harga_rata' => $data[$i][1],
                        'jml_produk' => $data[$i][2],
                        'jml_stok' => $data[$i][3],
                        'kelompok_produk_yia' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_laporan_satu'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_laporan_satu')->insert(
                        ['id' => $data[$i][0],
                        'jenis_pembinaan' => $data[$i][1],
                        'jml_kegiatan' => $data[$i][2],
                        'jml_peserta' => $data[$i][3],
                        'tahun_periode' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_laporan_tiga'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_laporan_tiga')->insert(
                        ['id' => $data[$i][0],
                        'diy' => $data[$i][1],
                        'kab_bantul' => $data[$i][2],
                        'kab_gkidul' => $data[$i][3],
                        'kab_kprogo' => $data[$i][4],
                        'kab_sleman' => $data[$i][5],
                        'uraian' => $data[$i][6],
                        'kota_yk' => $data[$i][7]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_pendidikan'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_pendidikan')->insert(
                        ['id' => $data[$i][0],
                        'pendidikan' => $data[$i][1],
                        'btl' => $data[$i][2],
                        'gk' => $data[$i][3],
                        'kp' => $data[$i][4],
                        'slm' => $data[$i][5],
                        'yk' => $data[$i][6],
                        'jumlah' => $data[$i][7],
                        'aset' => $data[$i][8],
                        'omset' => $data[$i][9],
                        'rerata_aset' => $data[$i][10],
                        'rerata_omset' => $data[$i][11]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_sektor_ekraf'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_sektor_ekraf')->insert(
                        ['id' => $data[$i][0],
                        'sektor_ekraf' => $data[$i][1],
                        'btl' => $data[$i][2],
                        'gk' => $data[$i][3],
                        'kp' => $data[$i][4],
                        'slm' => $data[$i][5],
                        'yk' => $data[$i][6],
                        'jumlah' => $data[$i][7],
                        'aset' => $data[$i][8],
                        'omset' => $data[$i][9],
                        'rerata_aset' => $data[$i][10],
                        'rerata_omset' => $data[$i][11]],
                    );
                }
                return $result;
            } elseif ( $jenis == 'ukm_sektor_group'){
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging')->table('ukm_sektor_group')->insert(
                        ['id' => $data[$i][0],
                        'sektor_pergub' => $data[$i][1],
                        'btl' => $data[$i][2],
                        'gk' => $data[$i][3],
                        'kp' => $data[$i][4],
                        'slm' => $data[$i][5],
                        'yk' => $data[$i][6],
                        'jumlah' => $data[$i][7],
                        'aset' => $data[$i][8],
                        'omset' => $data[$i][9],
                        'rerata_aset' => $data[$i][10],
                        'rerata_omset' => $data[$i][11]],
                    );
                }
                return $result;
            }
            break;
        case 'staging2':
            if ($jenis == 'alat_perangkat') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('alat_perangkat')->insert(
                        ['perangkat' => $data[$i][0],
                        'jumlah' => $data[$i][1],
                        'tahun' => $data[$i][2],
                        'jenis' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'balai_uji_tetap') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('balai_uji_tetap')->insert(
                        ['nama' => $data[$i][0],
                        'alamat' => $data[$i][1],
                        'ruang_lingkup' => $data[$i][2],
                        'kontak' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'cakupan_smfr') {
                for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('cakupan_smfr')->insert(
                        ['id' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'cakupan' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'capaian_spektrum') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('capaian_spektrum')->insert(
                        ['tahun' => $data[$i][0],
                        'capaian' => $data[$i][1],
                        'jumlah' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'data_imei') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('data_imei')->insert(
                        ['id' => $data[$i][0],
                        'data_imei' => $data[$i][1],
                        'jumlah' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'data_labuh') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('data_labuh')->insert(
                        ['administrasi' => $data[$i][0],
                        'tahun' => $data[$i][1],
                        'hak_labuh' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'data_lokai_penempatan') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('data_lokai_penempatan')->insert(
                        ['cluster' => $data[$i][0],
                        'jumlah_venue' => $data[$i][1],
                        'jumlah_cabang' => $data[$i][2],
                        'jumlah_pengawas' => $data[$i][3],
                        'jumlah_perangkat' => $data[$i][4],
                        'tahun' => $data[$i][5],
                        'jenis' => $data[$i][6]],
                    );
                }
                return $result;
            } elseif ($jenis == 'dmp_sfr') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('dmp_sfr')->insert(
                        ['equipment' => $data[$i][0],
                        'penyelenggara' => $data[$i][1],
                        'area' => $data[$i][2],
                        'status' => $data[$i][3],
                        'tahun' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ($jenis == 'hasil_mon_sfr') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('hasil_mon_sfr')->insert(
                        ['jenis' => $data[$i][0],
                        'sfr' => $data[$i][1],
                        'jumlah' => $data[$i][2],
                        'tahun' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'hs_telekomunikasi_new') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('hs_telekomunikasi_new')->insert(
                        ['id' => $data[$i][0],
                        'hs_code' => $data[$i][1],
                        'uraian' => $data[$i][2],
                        '2015_nilai' => $data[$i][3],
                        '2016_nilai' => $data[$i][4],
                        '2017_nilai' => $data[$i][5],
                        '2018_nilai' => $data[$i][6],
                        '2019_nilai' => $data[$i][7],
                        '2015_volume' => $data[$i][8],
                        '2016_volume' => $data[$i][9],
                        '2017_volume' => $data[$i][10],
                        '2018_volume' => $data[$i][11],
                        '2019_volume' => $data[$i][12]],
                    );
                }
                return $result;
            } elseif ($jenis == 'isr_smntara') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('isr_smntara')->insert(
                        ['id' => $data[$i][0],
                        'equipment' => $data[$i][1],
                        'bandwith' => $data[$i][2],
                        'number_of_channels' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'jumlah_alat_ukur') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('jumlah_alat_ukur')->insert(
                        ['perangkat' => $data[$i][0],
                        'jumlah' => $data[$i][1],
                        'tahun' => $data[$i][2],
                        'status' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'jumlah_sdppi') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('jumlah_sdppi')->insert(
                        ['unit' => $data[$i][0],
                        'jumlah' => $data[$i][1],
                        'tahun' => $data[$i][2],
                        'status' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'jlhu_tiap_balai') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('jlhu_tiap_balai')->insert(
                        ['id' => $data[$i][0],
                        'balai' => $data[$i][1],
                        'jumlah_lhu' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'jmon_sfr_perpanas') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('jmon_sfr_perpanas')->insert(
                        ['alat' => $data[$i][0],
                        'sfr' => $data[$i][1],
                        'jumlah' => $data[$i][2],
                        'tahun' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'nilai_bhr') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('nilai_bhr')->insert(
                        ['pita_frekuensi' => $data[$i][0],
                        'total' => $data[$i][1],
                        'tahun' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'opening_perangkat') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('opening_perangkat')->insert(
                        ['no' => $data[$i][0],
                        'perarngkat' => $data[$i][1],
                        'jumlah' => $data[$i][2],
                        'fungsi' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'pengakuan_laboraturium') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('pengakuan_laboraturium')->insert(
                        ['dasar_hukum' => $data[$i][0],
                        'kelompok' => $data[$i][1],
                        'jumlah_lab' => $data[$i][2],
                        'masa_berlaku' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'penyeselaian_pegujian') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('penyeselaian_pegujian')->insert(
                        ['tahun' => $data[$i][0],
                        'jumlah1' => $data[$i][1],
                        'presentase1' => $data[$i][2],
                        'jumlah2' => $data[$i][3],
                        'presentase2' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ($jenis == 'perangkat_digunakan') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('perangkat_digunakan')->insert(
                        ['cluster' => $data[$i][0],
                        'jumlah_ver' => $data[$i][1],
                        'jumlah_per' => $data[$i][2],
                        'fungsi' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'perangkat_pertandingan') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('perangkat_pertandingan')->insert(
                        ['cluster' => $data[$i][0],
                        'jumlah_venue' => $data[$i][1],
                        'Jumlah_perangkat' => $data[$i][2],
                        'fungsi_perangkat' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'perangkat_wsbk&perpanas') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('perangkat_wsbk&perpanas')->insert(
                        ['id' => $data[$i][0],
                        'perangkat' => $data[$i][1],
                        'jumlah' => $data[$i][2],
                        'keterangan' => $data[$i][3],
                        'jenis' => $data[$i][4]],
                    );
                }
                return $result;
            } elseif ($jenis == 'perkembangan_pnbp') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('perkembangan_pnbp')->insert(
                        ['id' => $data[$i][0],
                        'kementrian_kelembagaan' => $data[$i][1],
                        '2017' => $data[$i][2],
                        '2018' => $data[$i][3],
                        '2019' => $data[$i][4],
                        '2020' => $data[$i][5],
                        '2021' => $data[$i][6]],
                    );
                }
                return $result;
            } elseif ($jenis == 'personil_perangkat_open') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('personil_perangkat_open')->insert(
                        ['id' => $data[$i][0],
                        'lokasi' => $data[$i][1],
                        'jumlah' => $data[$i][2],
                        'jml2' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'rekap_system_smfr') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('rekap_system_smfr')->insert(
                        ['id' => $data[$i][0],
                        'upt' => $data[$i][1],
                        'jmlh_fix' => $data[$i][2],
                        'jmlh_mobile' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'sebaran_penggunaan') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('sebaran_penggunaan')->insert(
                        ['kabupaten' => $data[$i][0],
                        'sfr' => $data[$i][1],
                        'jumlah' => $data[$i][2],
                        'tahun' => $data[$i][3]],
                    );
                }
                return $result;
            } elseif ($jenis == 'sebaran_penggunaan_smfr') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('sebaran_penggunaan_smfr')->insert(
                        ['COL 1' => $data[$i][0]],
                    );
                }
                return $result;
            } elseif ($jenis == 'sfr_broadcast') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('sfr_broadcast')->insert(
                        ['lokasi' => $data[$i][0],
                        'sfr' => $data[$i][1],
                        'Jumlah' => $data[$i][2]],
                    );
                }
                return $result;
            } elseif ($jenis == 'target_penambahan_spektrum') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('target_penambahan_spektrum')->insert(
                        ['judul' => $data[$i][0],
                        '2020' => $data[$i][1],
                        '2021' => $data[$i][2],
                        '2022' => $data[$i][3],
                        '2023' => $data[$i][4],
                        '2024' => $data[$i][5]],
                    );
                }
                return $result;
            } elseif ($jenis == 'upt_personil_wsbk_perpanas') {
                 for ($i=1; $i < count($data); $i++) {
                    $result = DB::connection('staging_dua')->table('upt_personil_wsbk_perpanas')->insert(
                        ['id' => $data[$i][0],
                        'unit' => $data[$i][1],
                        'jumlah' => $data[$i][2]],
                    );
                }
                return $result;
            }
            break;
        default:
            # code...
            break;
    }
}
