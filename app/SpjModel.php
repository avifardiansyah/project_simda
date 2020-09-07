<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class SpjModel extends Model
{
    /* GLOBAL */
    public function getpnsdinas($kode_dinas)
    {
        return DB::table('simpeg_db.tb_01 AS a')
            ->select('a.nip', 'a.gdp', 'a.nama', 'a.gdb', 'b.golru', 'b.pangkat')
            ->LEFTJOIN('simpeg_db.a_golruang AS b', 'a.idgolrupkt', 'b.idgolru')
            ->where('a.kdunit', $kode_dinas)
            ->where('a.idjenkedudupeg', '!=', '21')
            ->where('a.idjenkedudupeg', '!=', '99')
            ->get();
    }
    /* END */

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
