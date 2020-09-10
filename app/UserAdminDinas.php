<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAdminDinas extends Authenticatable
{
    use Notifiable;

    protected $table = 'simpeg_db.tb_01';
    protected $guard = 'admindinas';
    protected $primaryKey = 'nip';

    protected $fillable = [
        'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
