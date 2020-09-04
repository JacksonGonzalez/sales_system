<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table= "products";

    protected $fillable = [
        'name', 'description', 'state', 'created_at', 'updated_at', 'code', 'idCategory', 'sale_price', 'stock'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function buys()
    {
        return $this->belongsToMany('App\Buy');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
