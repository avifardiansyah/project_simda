<?php

namespace App\Http\Controllers\module_spj\spj_dinas\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SpjModel;

class Penatausahaan extends Controller
{
    public function __construct()
    {
        $this->model = new SpjModel();
    }
    public function spjbpt()
    {
        $nip_bpt = session('user')['nip'];
        $kodes = session('user')['kodes'];
        $spjbpt['kegiatan'] = $this->model->getkegiatandinasperBpt($nip_bpt, $kodes);
        return view('module_spj/vAdmin/vBPT/_penatausahaan_bpt', $spjbpt);
    }
    public function rinciankeg($kodek)
    {
        $nip_bpt = session('user')['nip'];
        $kodes = session('user')['kodes'];
        $spjbpt['detkeg'] = $this->model->getdetailkegperkodekbpt($kodek, $kodes, $nip_bpt);
        $spjbpt['rinckeg'] = $this->model->getrinciankegperkodek($kodes, $kodek);

        return view('module_spj/vAdmin/vBPT/_rincian_kegiatan', $spjbpt);
    }
}
