<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class ProductChild extends Model
{

    protected $fillable = [
        'title' , 'product_id' , 'price',
        'max_order' , 'activation_status'
    ];
}
