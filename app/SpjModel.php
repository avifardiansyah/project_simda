<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class SpjModel extends Model
{
    /* DINAS ========================================================= */
    public function getkegiatandinas($kodes)
    {
        return DB::table('warehouseclp_db.tt_kegiatan')
            ->select('warehouseclp_db.tt_kegiatan.*', 'warehouseclp_db.tt_program.ket_program')
            ->LEFTJOIN('warehouseclp_db.tt_program', function ($join) {
                $join->on('warehouseclp_db.tt_kegiatan.kodes', 'warehouseclp_db.tt_program.kodes');
                $join->on('warehouseclp_db.tt_kegiatan.program_kd', 'warehouseclp_db.tt_program.program_kd');
            })
            ->where('warehouseclp_db.tt_kegiatan.kodes', $kodes)
            ->get();
    }
    /* ============================================================== */
}
