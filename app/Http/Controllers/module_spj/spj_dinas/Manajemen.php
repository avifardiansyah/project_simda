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

    public function pejabatperkodes()
    {
        $kodes = session('user')['kodes'];
        $a = $this->model->getpejabatdinas($kodes);
        echo json_encode($a);
    }

    public function simpanPejabatDinas(Request $post)
    {
        date_default_timezone_set("Asia/Jakarta");
        $tgluptrans = date("Y-m-d H:i:s");
        $kodes = $post->kodes;
        $nip = $post->nip;
        $statpeg = $post->statuspjb;
        $xix = md5($nip);

        $a = $this->model->cekurut($kodes, $statpeg);
        if ($a == 0) {
            $urut = 1;
        } else {
            $urut = $a + 1;
        }

        $kdk['kodek'] = $post->plhkeg;/* 
        for ($i = 0; $i < count($kdk); $i++) {
            $selectkodek[] = $kdk[$i];
        } */
        $datatrans['kodes'] = $kodes;
        $datatrans['nip'] = $nip;
        $datatrans['status'] = $statpeg;
        $datatrans['xix'] = $xix;
        $datatrans['urut'] = $urut;
        $datatrans['tgluptrans'] = $tgluptrans;
        $datatrans['kettrans'] = 1;
        $datatrans['kun'] = 0;
        //$this->model->savePejabatDinas($datatrans);
        if ($statpeg == 6 || $statpeg == 4) {
            $kodk = $this->model->updateTransaksiNipKodek($kodes, $nip, $kdk, $statpeg);
        }
        // echo json_encode(['stat' => true]);
        echo json_encode($kodk);
    }
    /* END PEJABAT */
}
