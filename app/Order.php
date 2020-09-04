<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= "orders";

    protected $fillable = [
        'idUser', 'idClient', 'idSupplier', 'created_at', 'updated_at', 'invoice_type', 'date_hour', 'serial',
        'invoice_number', 'total', 'tax', 'state',
    ];

    public function client()
    {
        return $this->belongsTo('App\client');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
