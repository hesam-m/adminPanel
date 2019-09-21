<?php

namespace App\Models\UserEntity;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

    protected $fillable = [
        "name",
        "owner_category_id",
        "latitude",
        "longitude",
        "mobile",
        "tel",
        "email",
        "address",
        "password",
        "logo_path",
        "activation_status"
    ];

    public static $activation_status=[
        'activated'   =>'1',
        'deactivated' =>'0',
        'blocked'     =>'2'
    ];
}
