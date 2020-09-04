<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoginModel extends Model
{
    public function authUser($username)
    {
        return DB::table('tm_xskpd')
            ->select('id', 'nama', 'nama_pendek', 'kodes', 'pimp', 'namap', 'nipp', 'jabp', 'status_skpd', 'kd_skpd', 'kd_urusan', 'kd_bidang', 'kd_unit', 'kd_sub', 'password')
            ->where('username', $username)
            ->first();
    }
}
