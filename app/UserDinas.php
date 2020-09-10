<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserDinas extends Authenticatable
{
    use Notifiable;

    protected $table = 'warehouseclp_db.tm_xskpd';
    protected $guard = 'dinas';

    protected $fillable = [
        'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
