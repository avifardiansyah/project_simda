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
        $spjbpt['rincrekkeg'] = $this->model->getrincianrekperkodek($kodek, $kodes);
        $spjbpt['rincrekpjk'] = $this->model->getrincianrekpjk();
        $spjbpt['kodek'] = $kodek;
        return view('module_spj/vAdmin/vBPT/_rincian_kegiatan', $spjbpt);
    }

    public function simpanTransaksi(Request $post)
    {
        date_default_timezone_set("Asia/Jakarta");
        $tglisian = date("Y-m-d H:i:s");
        $kodes = session('user')['kodes'];
        $nip = session('user')['nip'];
        $kodek = $post->kodeks;
        $a = explode("-", $post->tgl_trans_perincian);
        $bln = $a[1];
        $trans['kodes'] = $kodes;
        $trans['kodek'] = $kodek;
        $trans['nip'] = $nip;
        $trans['kd_rek'] = $post->trans_kd_rek;
        $trans['ket_rek'] = $post->trans_ket_rek;
        $trans['kd_rek_rujukan'] = $post->trans_kd_rek_rujukan;
        $trans['ket_rek_rujukan'] = $post->trans_ket_rek_rujukan;
        $trans['urut'] = $post->urut;
        $trans['bulan_trans'] = $bln;
        $trans['tgl_trans_perincian'] = $post->tgl_trans_perincian;
        $trans['ket_trans_perincian'] = $post->ket_trans_rincian;
        if ($post->ang_masuk == "") {
            $masuk = 0;
        } else {
            $masuk = $post->ang_masuk;
        }
        $trans['ang_masuk'] = $masuk;
        if ($post->ang_keluar == "") {
            $keluar = 0;
        } else {
            $keluar = $post->ang_keluar;
        }
        $trans['ang_keluar'] = $keluar;
        $trans['jns_trans'] = $post->jt;
        $trans['jns_trans_ang'] = "UP";
        $trans['nobukti'] = $post->nobukti;
        $trans['tgl_isian_trans'] = $tglisian;

        if (!$this->model->inserttrans($trans)) {
            echo json_encode(['stat' => false]);
        } else {
            echo json_encode(['stat' => true]);
        }
    }
    public function ubahTransaksi(Request $post)
    {
        date_default_timezone_set("Asia/Jakarta");
        $tglisian = date("Y-m-d H:i:s");
        $kodes = session('user')['kodes'];
        $nip = session('user')['nip'];
        $kodek = $post->kodeks;
        $idtrans = $post->idtransrinc;
        $a = explode("-", $post->tgl_trans_perincian);
        $bln = $a[1];
        $trans['kodes'] = $kodes;
        $trans['kodek'] = $kodek;
        $trans['nip'] = $nip;
        $trans['kd_rek'] = $post->trans_kd_rek;
        $trans['ket_rek'] = $post->trans_ket_rek;
        $trans['kd_rek_rujukan'] = $post->trans_kd_rek_rujukan;
        $trans['ket_rek_rujukan'] = $post->trans_ket_rek_rujukan;
        $trans['urut'] = $post->urut;
        $trans['bulan_trans'] = $bln;
        $trans['tgl_trans_perincian'] = $post->tgl_trans_perincian;
        $trans['ket_trans_perincian'] = $post->ket_trans_rincian;
        if ($post->ang_masuk == "") {
            $masuk = 0;
        } else {
            $masuk = $post->ang_masuk;
        }
        $trans['ang_masuk'] = $masuk;
        if ($post->ang_keluar == "") {
            $keluar = 0;
        } else {
            $keluar = $post->ang_keluar;
        }
        $trans['ang_keluar'] = $keluar;
        $trans['jns_trans'] = $post->jt;
        $trans['jns_trans_ang'] = "UP";
        $trans['nobukti'] = $post->nobukti;
        $trans['tgl_isian_trans'] = $tglisian;

        if (!$this->model->updatetrans($idtrans, $trans)) {
            echo json_encode(['stat' => false]);
        } else {
            echo json_encode(['stat' => true]);
        }
    }

    public function listrincianspjperkodek(Request $get)
    {
        $kodek = $get->kds;
        $kodes = session('user')['kodes'];
        $a = $this->model->getlistrincianspjperkodekkodes($kodek, $kodes);
        echo json_encode($a);
    }

    public function hapusTransaksi(Request $get)
    {
        $idtrans = $get->xid;
        if (!$this->model->deletetrans($idtrans)) {
            echo json_encode(['stat' => false]);
        } else {
            echo json_encode(['stat' => true]);
        }
    }
}
