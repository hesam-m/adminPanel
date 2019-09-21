<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class ProductPicture extends Model
{

    protected $fillable = [
        'path' , 'main' , 'product_id',
        'activation_status' ,
    ];
}
