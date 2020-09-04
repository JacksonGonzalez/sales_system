<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $table= "buys";

    protected $fillable = [
        'date_hour', 'idSupplier', 'number', 'created_at', 'updated_at', 'total', 
    ];

    public function supplier()
    {
        return $this->belongsTo('App\Supplie');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
