<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Good extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;

    protected  $fillable=[
        'user_id','boards_id','user_name','create_time'
    ];

    protected $hidden=[
        'password',
    ];
}
