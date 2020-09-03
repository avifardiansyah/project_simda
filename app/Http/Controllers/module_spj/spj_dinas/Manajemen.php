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
    public function rka()
    {
        $kodes = '2101001';
        $spj['datakeg'] = $this->model->getkegiatandinas($kodes);
        return view('module_spj/vDinas/vmanajemen/_manajemen_rka_dinas', $spj);
    }
}
