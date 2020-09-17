<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoginModel extends Model
{
    public function authUser($username, $password)
    {
        $user['dinas'] = DB::table('warehouseclp_db.tm_xskpd AS a')
            ->select('a.id', 'a.nama', 'a.nama_pendek', 'a.kodes', 'a.pimp', 'a.namap', 'a.nipp', 'a.jabp', 'a.status_skpd', 'a.kd_skpd', 'a.kd_urusan', 'a.kd_bidang', 'a.kd_unit', 'a.kd_sub', 'a.password')
            ->where('username', $username)
            ->first();
        $user['admindinas'] = DB::table('simpeg_db.tb_01 as a')
            ->selectRaw('a.nip,a.gdp,a.nama,a.gdb,a.tglhr,
        a.alm,a.hp,a.email,a.noktp,a.password,g.jenkel,f.agama,b.idparent,a.idskpd,j.skpd,b.path AS bidang,b.jab,
        c.golru,b.idesl,d.esl,c.pangkat,a.idjenkedudupeg,h.stspeg, k.kodes, k.status, k.xix, k.urut')
            ->LeftJoin('simpeg_db.skpd as b', 'a.idskpd', 'b.idskpd')
            ->LeftJoin('simpeg_db.a_golruang as c', 'a.idgolrupkt', 'c.idgolru')
            ->LeftJoin('simpeg_db.a_esl as d', 'a.idesljbt', 'd.idesl')
            ->LeftJoin('simpeg_db.a_agama as f', 'a.idagama', 'f.idagama')
            ->LeftJoin('simpeg_db.a_jenkel as g', 'a.idjenkel', 'g.idjenkel')
            ->LeftJoin('simpeg_db.a_stspeg as h', 'a.idstspeg', 'h.idstspeg')
            ->LeftJoin('simpeg_db.a_jenkedudupeg as i', 'a.idjenkedudupeg', 'i.idjenkedudupeg')
            ->LeftJoin('simpeg_db.skpd as j', DB::raw('SUBSTR(a.idskpd,1,2)'), 'j.idskpd')
            ->LeftJoin('superjon_db.m_trans_admin_dinas as k', 'a.nip', 'k.nip')
            ->where('a.nip', $username)
            ->where('a.password', $password)
            ->where('k.nip', $username)
            ->first();

        return $user;
    }

    public function insertLog($data)
    {
        return DB::table('superjon_db.m_log')
            ->insert($data);
    }
}
