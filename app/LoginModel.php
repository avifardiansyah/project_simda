<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoginModel extends Model
{
    public function authUser($username)
    {
        return DB::table('warehouseclp_db.tm_xskpd AS a')
            ->select('a.id', 'a.nama', 'a.nama_pendek', 'a.kodes', 'a.pimp', 'a.namap', 'a.nipp', 'a.jabp', 'a.status_skpd', 'a.kd_skpd', 'a.kd_urusan', 'a.kd_bidang', 'a.kd_unit', 'a.kd_sub', 'a.password')
            ->where('a.username', $username)
            ->first();
    }
}
