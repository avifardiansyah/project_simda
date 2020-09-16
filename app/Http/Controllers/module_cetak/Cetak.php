<?php

namespace App\Http\Controllers\module_cetak;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class Cetak extends Controller
{
    public function __construct()
    {
        $this->f4 = array(0,0,840,1320);
        $this->half = array(0,0,840,1320/2);

    }
    public function cetakBKU()
    {
        $pdf = PDF::loadview('module_cetak.layout.bku');
        return $pdf->stream();
    }

    public function cetakSPJ()
    {
        $pdf = PDF::loadview('module_cetak.layout.spj')->setPaper($this->f4, 'landscape');
        return $pdf->stream();
    }

    public function cetakKW()
    {
        $pdf = PDF::loadview('module_cetak.layout.kw')->setPaper($this->f4, 'portrait');
        return $pdf->stream();
    }


    public function cetakBpj()
    {
        $pdf = PDF::loadview('module_cetak.layout.bpj')->setPaper($this->f4, 'portrait');
        return $pdf->stream();
    }

    public function cetakBrp()
    {
        $pdf = PDF::loadview('module_cetak.layout.brp')->setPaper($this->f4, 'portrait');
        return $pdf->stream();
    }

}
