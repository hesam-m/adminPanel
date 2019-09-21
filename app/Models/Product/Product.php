<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'code' , 'name' , 'owner_id' ,
        'description' , 'activation_status'
    ];
}
