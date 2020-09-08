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
        $kodes = session('user')['kodes'];
        $spj['datakeg'] = $this->model->getkegiatandinas($kodes);
        return view('module_spj/vDinas/vmanajemen/_manajemen_rka_dinas', $spj);
    }
    /* END RKA */

    /* PEJABAT */
    public function pejabat()
    {
        $kodes = session('user')['kodes'];
        $kode_dinas = 96;
        $spj['kodes'] = $kodes;
        /* $spj['datakeg'] = $this->model->getkegiatandinas($kodes); */
        $spj['pegawai'] = $this->model->getpnsdinas($kode_dinas);
        $spj['statuspjb'] = $this->model->getstatus();
        return view('module_spj/vDinas/vmanajemen/_manajemen_pejabat_dinas', $spj);
    }
    public function kegiatanperkodes(Request $req)
    {
        $kodes = $req->kodes;
        $a = $this->model->getkegiatandinas($kodes);
        echo json_encode($a);
    }
    /* END PEJABAT */
}
