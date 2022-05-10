<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parentKepegawaian = $this->create_parent_menu('Dashboard Kepegawaian');
        $kepegawaian = [
            'berdasarkan golongan',
            'berdasarkan umur',
            'berdasarkan sppd',
            'berdasarkan pendidikan',
            'berdasarkan eselon',
            'berdasarkan absen 3 hari',
            'berdasarkan yang akan pensiun'
        ];
        $this->create_child_menu($kepegawaian, $parentKepegawaian);

        $parentKependudukan = $this->create_parent_menu('Dashboard Kependudukan');
        $kependudukan = [
            'berdasarkan jenis kelamin',
            'berdasarkan agama',
            'berdasarkan golongan darah',
            'berdasarkan status perkawinan',
            'berdasarkan pekerjaan',
            'berdasarkan pendidikan'
        ];
        $this->create_child_menu($kepegawaian, $parentKependudukan);

        $parentELapor = $this->create_parent_menu('Dashboard E-Lapor');
        $elapor = [
            'berdasarkan kategori',
            'berdasarkan skpd',
            'berdasarkan kabupaten',
            'berdasarkan lokasi'
        ];
        $this->create_child_menu($elapor, $parentELapor);
        
        $parentSurveillance = $this->create_parent_menu('Dashboard Surveillance');
        $cctv = [
            'atcs',
            'atcs kota',
            'cctv bantul',
            'cctv kp',
            'cctv public',
            'cctv sleman',
            'cctv sungai',
            'cctv uptmalioboro'
        ];
        $this->create_child_menu($cctv, $parentSurveillance);
        
        $parentLand = $this->create_parent_menu('Dashboard Pertanahan');
        $land = [
            'pertanahan'
        ];
        $this->create_child_menu($land, $parentLand);
        
        $parentTataRuang = $this->create_parent_menu('Dashboard Tata Ruang');
        $tataRuang = [
            'rencana pola ruang',
            'rencana struktur ruang',
            'kawasan strategis provinsi'
        ];
        $this->create_child_menu($tataRuang, $parentTataRuang);
        
        $parentSimnangkis = $this->create_parent_menu('Simnangkis');
        $simnangkis = [
            'air minum',
            'bab',
            'bahan bakar memasak',
            'daya listrik',
            'disabilitas',
            'ijazah',
            'jenis_dinding',
            'kepemilikan tempat',
            'kesertaan program',
            'pekerjaan',
            'pendidikan',
            'status pekerjaan',
            'penyakit kronis',
            'status perkawinan',
            'sumber penerangan'
        ];
        $this->create_child_menu($simnangkis, $parentSimnangkis);
        
        $parentKesehatan = $this->create_parent_menu('Dashboard Kesehatan');
        $kesehatan = [
            'sebaran covid-19',
            'statistik covid-19',
            'info rumah sakit',
            'info vaksin'
        ];
        $this->create_child_menu($kesehatan, $parentKesehatan);
        
        $parentKetertiban = $this->create_parent_menu('Dashboard Ketertiban');
        $ketertiban = [
            'ketertiban umum',
            'pengamanan',
            'pertolongan',
            'penegakan perda'
        ];
        $this->create_child_menu($ketertiban, $parentKetertiban);
        
        $parentDiskopUkm = $this->create_parent_menu('Dashboard Diskop Ukm');
        $ukm = [
            'summary koperasi',
            'keragaan koperasi',
            'summary ukm',
            'pembinaan ukm',
            'peta ukm'
        ];
        $this->create_child_menu($ukm, $parentDiskopUkm);
        
        $parentDisnaker = $this->create_parent_menu('Dashboard Disnaker Trans');
        $disnaker = [
            'angkatan kerja',
            'pendudukan usia kerja',
            'penganggur',
            'tenaga kerja migran',
            'transmigrasi'
        ];
        $this->create_child_menu($disnaker, $parentDisnaker);
    }

    private function create_parent_menu($name)
    {
        $parent = Menu::create([
            'name' => $name,
            'source' => NULL,
            'status' => 1,
        ]);

        return $parent;
    }

    private function create_child_menu($menus, $parent)
    {
        foreach ($menus as $menu) {
            Menu::create([
                'name' => $menu
            ], $parent);
        }
    }
}
