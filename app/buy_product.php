<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buy_product extends Model
{
    protected $table = 'buy_product';

    protected $fillable = [
        'idBuy', 'idProduct', 'quantity', 'buy_price'
    ];
}
