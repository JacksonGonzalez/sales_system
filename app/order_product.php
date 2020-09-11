<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_product extends Model
{
    protected $table = 'order_product';

    protected $fillable = [
        'idOrder', 'idProduct', 'quantity', 'price'
    ];
}
