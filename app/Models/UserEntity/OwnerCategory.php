<?php

namespace App\Models\UserEntity;

use Illuminate\Database\Eloquent\Model;

class OwnerCategory extends Model
{

    protected $fillable = [
        'title' , 'key'
    ];

    public static $key = [
        'restaurant' => 'res' ,
        'coffee'     => 'cof' ,
        'market'     => 'mrk' ,
        'cookie'     => 'cki' ,
    ];
}
