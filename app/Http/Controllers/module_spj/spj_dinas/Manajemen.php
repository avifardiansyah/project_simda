<?php

namespace App\Http\Controllers\module_spj\spj_dinas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SpjModel;

class Manajemen extends Controller
{
    public function __construct()
    {
        $this->model = new SpjModel();
    }
    /* RKA */
    public function rka()
    {
        $kodes = '2101001';
        $spj['datakeg'] = $this->model->getkegiatandinas($kodes);
        return view('module_spj/vDinas/vmanajemen/_manajemen_rka_dinas', $spj);
    }
    /* END RKA */

    /* PEJABAT */
    public function pejabat()
    {
        $kodes = '2101001';
        $kode_dinas = 96;
        $spj['datakeg'] = $this->model->getkegiatandinas($kodes);
        $spj['pegawai'] = $this->model->getpnsdinas($kode_dinas);
        return view('module_spj/vDinas/vmanajemen/_manajemen_pejabat_dinas', $spj);
    }
    /* END PEJABAT */
}
